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

        // Handle dropdown toggles
        this.bindDropdownToggles();

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

    closeAllSubmenus() {
        const openSubmenus = document.querySelectorAll(".submenu.show");
        openSubmenus.forEach((submenu) => {
            submenu.classList.remove("show");
            const parentToggle = submenu.previousElementSibling;
            const arrow = parentToggle?.querySelector(".dropdown-arrow");
            if (arrow) arrow.classList.remove("rotated");
        });
    }

    bindDropdownToggles() {
        const dropdownToggles = document.querySelectorAll(".dropdown-toggle");

        dropdownToggles.forEach((toggle) => {
            toggle.addEventListener("click", (e) => {
                e.preventDefault();
                e.stopPropagation();

                // Don't open submenus when sidebar is collapsed
                if (this.sidebar?.classList.contains("collapsed")) {
                    return;
                }

                const targetId = toggle.getAttribute("data-bs-target");
                const submenu = document.querySelector(targetId);
                const arrow = toggle.querySelector(".dropdown-arrow");

                if (submenu) {
                    // Close other open submenus first
                    const otherSubmenus =
                        document.querySelectorAll(".submenu.show");
                    otherSubmenus.forEach((otherSubmenu) => {
                        if (otherSubmenu !== submenu) {
                            otherSubmenu.classList.remove("show");
                            const otherParent =
                                otherSubmenu.previousElementSibling;
                            const otherArrow =
                                otherParent?.querySelector(".dropdown-arrow");
                            if (otherArrow)
                                otherArrow.classList.remove("rotated");
                        }
                    });

                    // Toggle current submenu
                    const isCurrentlyOpen = submenu.classList.contains("show");

                    if (isCurrentlyOpen) {
                        submenu.classList.remove("show");
                        if (arrow) arrow.classList.remove("rotated");
                    } else {
                        submenu.classList.add("show");
                        if (arrow) arrow.classList.add("rotated");
                    }
                }
            });
        });
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

                // If it's a submenu item, also open its parent
                if (item.classList.contains("submenu-item")) {
                    const submenu = item.closest(".submenu");
                    if (submenu) {
                        submenu.classList.add("show");
                        const parentToggle = submenu.previousElementSibling;
                        const arrow =
                            parentToggle?.querySelector(".dropdown-arrow");
                        if (arrow) arrow.classList.add("rotated");
                    }
                }
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
