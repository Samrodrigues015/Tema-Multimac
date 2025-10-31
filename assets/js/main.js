// ===== Script menu header =====
document.addEventListener("DOMContentLoaded", function () {
  // ===== Menu Mobile Básico =====
  const menuToggle = document.querySelector(".mobile-menu-toggle");
  const navMenu = document.querySelector(".nav-menu");

  if (menuToggle && navMenu) {
    menuToggle.addEventListener("click", function () {
      navMenu.classList.toggle("active");
      this.classList.toggle("active");
    });

    document.addEventListener("click", function (e) {
      if (!navMenu.contains(e.target) && !menuToggle.contains(e.target)) {
        navMenu.classList.remove("active");
        menuToggle.classList.remove("active");
      }
    });
  }

  // ===== Dropdowns Mobile =====
  const dropdowns = document.querySelectorAll(".dropdown");
  dropdowns.forEach((dropdown) => {
    const link = dropdown.querySelector("a");
    if (link && window.innerWidth <= 992) {
      link.addEventListener("click", function (e) {
        e.preventDefault();
        this.parentNode.classList.toggle("open");
      });
    }
  });
});

// ===== Navegação Responsiva Avançada =====
class ResponsiveNavigation {
  constructor() {
    this.menuToggle = document.querySelector(".menu-toggle");
    this.nav = document.querySelector(".nav");
    this.dropdownItems = document.querySelectorAll(
      ".nav__item:has(.mega-dropdown)"
    );

    if (this.menuToggle && this.nav) {
      this.isDesktop = window.innerWidth >= 1024;
      this.init();
    }
  }

  init() {
    this.bindEvents();
    this.handleResize();
  }

  bindEvents() {
    this.menuToggle.addEventListener("click", () => this.toggleMobileMenu());

    this.dropdownItems.forEach((item) => {
      const link = item.querySelector(".nav__link");
      const dropdown = item.querySelector(".mega-dropdown");

      if (link && dropdown) {
        link.addEventListener("click", (e) =>
          this.handleDropdownClick(e, item)
        );
      }
    });

    document.addEventListener("click", (e) => this.handleOutsideClick(e));
    window.addEventListener("resize", () => this.handleResize());
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape") {
        this.closeAllDropdowns();
        this.closeMobileMenu();
      }
    });
  }

  toggleMobileMenu() {
    this.nav.classList.contains("active")
      ? this.closeMobileMenu()
      : this.openMobileMenu();
  }

  openMobileMenu() {
    this.nav.classList.add("active");
    this.menuToggle.classList.add("active");
    this.menuToggle.setAttribute("aria-expanded", "true");
    document.body.style.overflow = "hidden";
  }

  closeMobileMenu() {
    this.nav.classList.remove("active");
    this.menuToggle.classList.remove("active");
    this.menuToggle.setAttribute("aria-expanded", "false");
    document.body.style.overflow = "";
    this.closeAllDropdowns();
  }

  handleDropdownClick(e, item) {
    if (!this.isDesktop) {
      e.preventDefault();
      this.toggleDropdown(item);
    }
  }

  toggleDropdown(item) {
    item.classList.contains("active")
      ? this.closeDropdown(item)
      : this.openDropdown(item);
  }

  openDropdown(item) {
    this.closeAllDropdowns();
    item.classList.add("active");
    item.querySelector(".mega-dropdown").classList.add("active");
    item.querySelector(".nav__link").setAttribute("aria-expanded", "true");
  }

  closeDropdown(item) {
    item.classList.remove("active");
    const dropdown = item.querySelector(".mega-dropdown");
    if (dropdown) dropdown.classList.remove("active");
    const link = item.querySelector(".nav__link");
    if (link) link.setAttribute("aria-expanded", "false");
  }

  closeAllDropdowns() {
    this.dropdownItems.forEach((item) => this.closeDropdown(item));
  }

  handleOutsideClick(e) {
    if (!e.target.closest(".nav") && !e.target.closest(".menu-toggle")) {
      this.closeMobileMenu();
    }
  }

  handleResize() {
    const wasDesktop = this.isDesktop;
    this.isDesktop = window.innerWidth >= 1024;

    if (this.isDesktop && !wasDesktop) {
      this.closeMobileMenu();
      this.closeAllDropdowns();
    } else if (!this.isDesktop && wasDesktop) {
      this.closeAllDropdowns();
    }
  }
}

document.addEventListener("DOMContentLoaded", () => {
  if (
    document.querySelector(".menu-toggle") &&
    document.querySelector(".nav")
  ) {
    new ResponsiveNavigation();
  }
});

// Script para Página Home - Produtos
document.addEventListener("DOMContentLoaded", function () {
  const toggleButton = document.querySelector(".news-button button");
  const hiddenCards = document.querySelectorAll(".product-card.hidden-product");
  let isExpanded = false;

  // Garantir que os produtos ocultos estão escondidos no início
  hiddenCards.forEach((card) => {
    card.style.display = "none";
  });

  toggleButton.addEventListener("click", function () {
    if (!isExpanded) {
      // Mostrar os produtos ocultos
      hiddenCards.forEach((card) => {
        card.style.display = "flex";
      });
      toggleButton.textContent = "Fechar lista";
      isExpanded = true;
    } else {
      // Esconder novamente
      hiddenCards.forEach((card) => {
        card.style.display = "none";
      });
      toggleButton.textContent = "Ver todos os produtos";
      isExpanded = false;
    }
  });
});
// Script para Página Home - Soluções
document.addEventListener("DOMContentLoaded", function () {
  const toggleButtonSolutions = document.querySelector(
    ".solution-container .news-button button"
  );
  const hiddenSolutionCards = document.querySelectorAll(
    ".solution-card.hidden-solution"
  );
  let solutionsExpanded = false;

  // Garantir que os cards ocultos estão escondidos no início
  hiddenSolutionCards.forEach((card) => {
    card.style.display = "none";
  });

  toggleButtonSolutions.addEventListener("click", function () {
    if (!solutionsExpanded) {
      // Mostrar os cards
      hiddenSolutionCards.forEach((card) => {
        card.style.display = "flex";
      });
      toggleButtonSolutions.textContent = "Fechar Lista";
      solutionsExpanded = true;
    } else {
      // Esconder de novo
      hiddenSolutionCards.forEach((card) => {
        card.style.display = "none";
      });
      toggleButtonSolutions.textContent = "Conheça todas as soluções";
      solutionsExpanded = false;
    }
  });
});
// ===== Carrossel de Logos =====
if (window.innerWidth <= 640) {
  const logosContainer = document.querySelector(".partners-logos");
  if (logosContainer) {
    const images = Array.from(logosContainer.querySelectorAll("img"));
    if (images.length > 0) {
      const carousel = document.createElement("div");
      carousel.className = "logos-carousel";

      images.forEach((img) => carousel.appendChild(img));
      logosContainer.appendChild(carousel);

      carousel.style.overflowX = "auto";
      carousel.style.scrollSnapType = "x mandatory";
      carousel.style.display = "flex";
      carousel.style.gap = "15px";
      carousel.style.paddingBottom = "15px";

      images.forEach((img) => {
        img.style.flex = "0 0 auto";
        img.style.height = "60px";
        img.style.scrollSnapAlign = "start";
      });
    }
  }
}
 // Script para Faq das paginas(Geral)
  document.addEventListener('DOMContentLoaded', function () {
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
      const icon = item.querySelector('.icon');

      icon.addEventListener('click', () => {
        item.classList.toggle('active');
      });
    });
  });

  // ===== Escript para pagina Soluçoes documentais ===== //

document.querySelectorAll('.tech-item').forEach(item => {
  const header = item.querySelector('.tech-header');

  header.addEventListener('click', () => {
    item.classList.toggle('active');
  });
});
