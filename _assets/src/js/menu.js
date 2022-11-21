// Main Menu
import { getElement, getElements, ifSelectorExist, off } from './utils';

// mobile menu
export const mainMenu = () => {
  const menuButton = getElement('#main-menu-button');
  const menu = getElement('nav.main-menu');
  function menuOpen() {
    menu.classList.add('open');
    menuButton.classList.add('open');
    window.addEventListener('click', closeOnBackgroundClick);
  }
  function menuClose() {
    menuButton.classList.remove('open');
    menu.classList.remove('open');
    setMenuLevel(0);

    menuCloseSubmenus();
    menu.scrollTo(0, 0);
    off('click', window, closeOnBackgroundClick);
  }

  function setMenuLevel(n) {
    menu.classList.remove('active-level-1', 'active-level-2', 'active-level-3');
    function inArray(needle, haystack) {
      if (haystack.indexOf(needle) !== -1) {
        return true;
      } else {
        return false;
      }
    }
    if (inArray(n, [1, 2, 3])) {
      menu.classList.add('active-level-' + n);
    }
  }

  function menuOpenSubmenu(submenuAlias) {
    var submenu = menu.querySelector('[data-alias=' + submenuAlias + ']');
    if (submenu.length !== null) {
      var levelBlock = submenu.closest('div[data-level]');
      levelBlock.classList.add('open');
      if (levelBlock.querySelector('ul.visible') !== null) {
        levelBlock.querySelector('ul.visible').classList.remove('visible');
      }

      submenu.classList.add('visible');
    }
  }

  function menuCloseSubmenus(closeLevels) {
    closeLevels = typeof closeLevels !== 'undefined' ? closeLevels : 0;

    var levelBlocks = menu.querySelectorAll('[class*=level-]');

    Array.from(levelBlocks).forEach((elem) => {
      var levelBlock = elem;

      if (closeLevels <= parseInt(levelBlock.getAttribute('data-level'))) {
        levelBlock.classList.remove('open');
        if (levelBlock.querySelector('ul.open') !== null) {
          levelBlock.querySelector('ul.open').classList.remove('open');
        }
        if (levelBlock.querySelector('.o-sub.open')) {
          levelBlock.querySelector('.o-sub.open').classList.remove('open');
        }
      }
    });
  }

  menuButton.addEventListener('click', (e) => {
    e.stopPropagation();
    e.preventDefault();
    if (menuButton.classList.contains('open')) {
      menuClose();
    } else {
      menuOpen();
      setMenuLevel(1);
    }
  });

  const subMenus = document.querySelectorAll('.o-sub[data-target-alias]');

  // click on subMenu
  if (subMenus !== null) {
    Array.from(subMenus).forEach((link) => {
      link.addEventListener('click', function (event) {
        let parentTitle = link.getAttribute('data-item-title');
        let parentUrl = link.getAttribute('data-url');
        if (parentTitle != null && parentTitle != undefined && parentUrl != undefined && parentUrl != null) {
          let parentAlias = link.getAttribute('data-target-alias');
          let levelTitle = document.querySelector(`[data-alias=${parentAlias}] .level-url`);
          levelTitle.textContent = parentTitle;
          levelTitle.setAttribute('href', parentUrl);
        }
        event.preventDefault();
        event.stopPropagation();
        let elementAlias = this.getAttribute('data-target-alias'),
          levelBlock = this.closest('div[class*=level-]');
        if (this.classList.contains('open')) {
          setMenuLevel(parseInt(levelBlock.getAttribute('data-level')));
          this.classList.remove('open');
          menuCloseSubmenus(parseInt(levelBlock.getAttribute('data-level')));
        } else {
          setMenuLevel(parseInt(levelBlock.getAttribute('data-level')) + 1);
          menuCloseSubmenus(parseInt(levelBlock.getAttribute('data-level')));
          menuOpenSubmenu(elementAlias);
          if (levelBlock.querySelector('.o-sub[data-target-alias].open') !== null) {
            levelBlock.querySelector('.o-sub[data-target-alias].open').classList.remove('open');
          }
          this.classList.add('open');
        }
      });
    });
  }

  // Close menu by click on background
  function closeOnBackgroundClick(e) {
    if ((e.target.closest('#main-menu-button') !== null && e.target.closest('.o-sub') !== null && e.target.closest('nav.main-menu') !== null) || e.target.classList.contains('wrapper')) {
      menuClose();
    }
  }

  // Mobile back buttons
  if (menu != null && menu != undefined && menu.querySelector('.evt-close-level') != null) {
    let closeSubmenuArrowSelector = menu.querySelectorAll('.evt-close-level');
    Array.from(closeSubmenuArrowSelector).forEach((item) => {
      item.addEventListener('click', function (e) {
        e.stopPropagation();
        e.preventDefault();
        var currentLevel = parseInt(item.getAttribute('data-current-level'));
        setMenuLevel(currentLevel - 1);
        menuCloseSubmenus(currentLevel - 1);
      });
    });
  }
};

// desktop dropdown
export const dropdownMenu = () => {
  let headerSelector = getElement('header');
  if (ifSelectorExist(headerSelector)) {
    let itemsHasChildren = getElements('.menu-item-has-children');
    if (ifSelectorExist(itemsHasChildren)) {
      Array.from(itemsHasChildren).forEach((item) => {
        let subMenuSelector = getElement('.sub-menu', item);
        if (ifSelectorExist(subMenuSelector)) {
          subMenuSelector.style.top = headerSelector.clientHeight + 'px';
        }
      });
    }
  }
};
