// Sidebar Management Class - COMPLETELY FIXED VERSION
class SidebarManager {
    constructor() {
        this.sidebar = document.getElementById("sidebar");
        this.mainContent = document.getElementById("mainContent");
        this.sidebarToggle = document.getElementById("sidebarToggle");
        this.mobileToggle = document.getElementById("mobileToggle");
        this.sidebarOverlay = document.getElementById("sidebarOverlay");

        // Debug log
        console.log("Sidebar elements found:", {
            sidebar: !!this.sidebar,
            mainContent: !!this.mainContent,
            sidebarToggle: !!this.sidebarToggle,
            mobileToggle: !!this.mobileToggle,
            sidebarOverlay: !!this.sidebarOverlay,
        });

        if (this.sidebar && this.mainContent && this.sidebarToggle) {
            this.init();
        } else {
            console.error("Required elements not found!");
        }
    }

    init() {
        this.bindEvents();
        this.loadSavedState();
        this.setActiveMenu();
        this.handleResponsive();
    }

    bindEvents() {
        // Desktop toggle - COMPLETELY FIXED
        if (this.sidebarToggle) {
            this.sidebarToggle.addEventListener("click", (e) => {
                e.preventDefault();
                e.stopPropagation();
                console.log("Toggle button clicked!");
                this.toggleSidebar();
            });
        }

        // Mobile toggle
        if (this.mobileToggle) {
            this.mobileToggle.addEventListener("click", (e) => {
                e.preventDefault();
                e.stopPropagation();
                this.toggleMobileSidebar();
            });
        }

        // Close sidebar when clicking overlay
        if (this.sidebarOverlay) {
            this.sidebarOverlay.addEventListener("click", () => {
                this.closeMobileSidebar();
            });
        }

        // Handle window resize
        window.addEventListener("resize", () => {
            this.handleResponsive();
        });

        // Handle escape key
        document.addEventListener("keydown", (e) => {
            if (e.key === "Escape") {
                this.closeMobileSidebar();
            }
        });
    }

    toggleSidebar() {
        console.log("toggleSidebar called");

        if (!this.sidebar || !this.mainContent) {
            console.error("Sidebar or mainContent not found in toggleSidebar");
            return;
        }

        const isCurrentlyCollapsed =
            this.sidebar.classList.contains("collapsed");
        console.log("Current state - collapsed:", isCurrentlyCollapsed);

        if (isCurrentlyCollapsed) {
            // Expand sidebar
            this.sidebar.classList.remove("collapsed");
            this.mainContent.classList.remove("expanded");
            console.log("Expanding sidebar");
        } else {
            // Collapse sidebar
            this.sidebar.classList.add("collapsed");
            this.mainContent.classList.add("expanded");
            this.closeAllSubmenus();
            console.log("Collapsing sidebar");
        }

        // Save state to localStorage
        const newState = this.sidebar.classList.contains("collapsed");
        localStorage.setItem("sidebarCollapsed", newState.toString());
        console.log("Saved state:", newState);
    }

    toggleMobileSidebar() {
        if (!this.sidebar || !this.sidebarOverlay) return;

        const isCurrentlyVisible = this.sidebar.classList.contains("show");

        if (isCurrentlyVisible) {
            this.sidebar.classList.remove("show");
            this.sidebarOverlay.classList.remove("show");
        } else {
            this.sidebar.classList.add("show");
            this.sidebarOverlay.classList.add("show");
        }
    }

    closeMobileSidebar() {
        if (!this.sidebar || !this.sidebarOverlay) return;

        this.sidebar.classList.remove("show");
        this.sidebarOverlay.classList.remove("show");
    }

    loadSavedState() {
        const isCollapsed = localStorage.getItem("sidebarCollapsed") === "true";
        console.log("Loading saved state:", isCollapsed);

        if (isCollapsed && this.sidebar && this.mainContent) {
            this.sidebar.classList.add("collapsed");
            this.mainContent.classList.add("expanded");
            console.log("Applied saved collapsed state");
        }
    }

    setActiveMenu() {
        const currentPath = window.location.pathname;
        const menuItems = document.querySelectorAll(
            ".menu-item, .submenu-item"
        );

        menuItems.forEach((item) => {
            item.classList.remove("active");
            if (item.getAttribute("href") === currentPath) {
                item.classList.add("active");
            }
        });
    }

    handleResponsive() {
        if (window.innerWidth > 768) {
            this.closeMobileSidebar();
        }
    }
}

// Initialize when DOM is loaded
document.addEventListener("DOMContentLoaded", () => {
    console.log("DOM loaded, initializing SidebarManager");
    window.sidebarManager = new SidebarManager(); // Make it global for debugging
});

// Export for potential external use
export default SidebarManager;
