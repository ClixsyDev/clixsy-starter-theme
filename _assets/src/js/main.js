import { mainMenu, dropdownMenu } from './menu';
import headerInit from './header';
import {
    getElement,
    getElements,
    ifSelectorExist,
    isOverflown,
    ready,
} from './utils';
import { initSliders } from './sliders';
import { formEntry } from './form_entry';
import { hoverOnButton } from './button-hover';
import { tocAnchor } from './toc';
import { gclid } from './gclid';
import { sentNewMessage } from './thank-you-messages';
import { aosAnimations } from './aos-animations';
import { smoothScrollFn } from './smooth-site-scrolling';
import { modalDialog, formModal } from './modals';
// import { gaEventsCF7 } from './ga-events-cf7';
import { cf7Events } from './cf7-events';
import { cf7MaskTelValidation } from './cf7-mask-for-tel';
import { coCounselForm } from './co-counsel-form';
import { refferalForm } from './refferal-form';

/* FAQ start */
const initFAQ = () => {
    const acc = getElements('.faq__header');
    if (acc && acc.length) {
        for (let i = 0; i < acc.length; i++) {
            acc[i].addEventListener('click', function () {
                if (
                    this.parentNode.classList.contains('faq__position__active')
                ) {
                    this.nextElementSibling.style.maxHeight = null;
                    this.parentNode.classList.remove('faq__position__active');
                } else {
                    for (let j = 0; j < acc.length; j++) {
                        acc[j].parentNode.classList.remove(
                            'faq__position__active'
                        );
                        acc[j].nextElementSibling.style.maxHeight = null;
                    }
                    this.parentNode.classList.add('faq__position__active');
                    const panel = this.nextElementSibling;
                    panel.style.maxHeight = panel.scrollHeight + 'px';
                }
            });
        }
    }
    let moreBtn = getElement('.faq-without-image__btn');
    if (ifSelectorExist(moreBtn)) {
        moreBtn.addEventListener('click', () => {
            let hiddenFaqImageLeft = getElement('.hidden_faq_image_left');
            moreBtn.textContent = '- show less';
            if (moreBtn.classList.contains('clicked')) {
                hiddenFaqImageLeft.classList.add('hidden');
                moreBtn.textContent = '+ show more...';
                moreBtn.classList.remove('clicked');
            } else {
                if (ifSelectorExist(hiddenFaqImageLeft)) {
                    moreBtn.classList.add('clicked');
                    hiddenFaqImageLeft.classList.remove('hidden');
                }
            }
        });
    }
};
/* FAQ end */

// Show more FAQ item
const btnMore = () => {
    let hiddenBlock = document.querySelector('.hidden-text');
    let btn = document.querySelector('.more-btn');
    let faqMore = () => {
        let hiddenBlock = document.querySelector('.hidden-faqs');
        let btn = document.querySelector('.more-btn-faq');
        if (btn) {
            btn.addEventListener('click', () => {
                hiddenBlock.classList.toggle('hidden');
                event.preventDefault();

                if (hiddenBlock.classList.contains('hidden')) {
                    btn.textContent = 'read more...';
                } else {
                    btn.textContent = 'show less...';
                }
            });
        }
    };
};

// Text education btnMore
const btnMoreEducation = () => {
    let hiddenBlock = document.querySelector('.hidden-text-education');
    let btn = document.querySelector('.more-btn-education');

    if (ifSelectorExist(btn) && ifSelectorExist(hiddenBlock)) {
        btn.addEventListener('click', event => {
            event.preventDefault();

            hiddenBlock.classList.toggle('hidden');
            console.log('clicking');

            if (hiddenBlock.classList.contains('hidden')) {
                btn.textContent = 'read more...';
            } else {
                btn.textContent = 'show less...';
            }
        });
    }
};

// Scroll to [data-go-to] attr
const nextArrow = () => {
    const arrows = Array.from(document.querySelectorAll('[data-go-to]'));
    arrows.map(arrow => {
        arrow.addEventListener('click', e => {
            e.preventDefault();
            const selector = arrow.getAttribute('data-go-to');
            window.scrollTo({
                top:
                    document.querySelector(selector).offsetTop -
                    document.querySelector('header').offsetHeight,
                behavior: 'smooth',
            });
        });
    });
};

// Show form after submit dropdown in <!-- welcome-banner-design__two.php -->
const secondStep = () => {
    let btnForm = document.querySelector('.send_form_btn');
    let secondStep = document.querySelector('.second-step-form');
    let nextStep = document.querySelector('.next_step');

    if (ifSelectorExist(nextStep)) {
        nextStep.addEventListener('click', () => {
            nextStep.style.display = 'none';
            secondStep.classList.remove('hidden');
            btnForm.classList.remove('hidden-btn');
        });
    }
};

// Show more content in <!-- text-form-design__two--template.php -->
const btnMoreFormDesignTwo = () => {
    fixedHeightContainerSelector = getElements('.fixedHeightContainer');
    if (ifSelectorExist(fixedHeightContainerSelector)) {
        Array.from(fixedHeightContainerSelector).forEach(item => {
            fixedHeightElemSelector = getElement('.fixedHeight', item);
            toggleFixedHeight = getElement('.toggleFixedHeight', item);
            innerContentHeight = getElement('.innerContentHeight', item);
            checkHeight =
                innerContentHeight.offsetHeight >
                parseInt(fixedHeightElemSelector.style.maxHeight);
            console.log(
                innerContentHeight.offsetHeight +
                    ' || ' +
                    parseInt(fixedHeightElemSelector.style.maxHeight)
            );
            if (
                ifSelectorExist(fixedHeightContainerSelector) &&
                ifSelectorExist(toggleFixedHeight) &&
                checkHeight
            ) {
                fixedHeightElemSelector.classList.add(
                    'overflow-hidden',
                    'hidden-with-shadow'
                );
                toggleFixedHeight.classList.remove('hidden');
                toggleFixedHeight.addEventListener('click', () => {
                    if (
                        fixedHeightElemSelector.classList.contains(
                            'overflow-hidden'
                        )
                    ) {
                        fixedHeightElemSelector.classList.remove(
                            'overflow-hidden',
                            'hidden-with-shadow'
                        );
                        fixedHeightElemSelector.style.maxHeight = '1000000px';
                        console.log(fixedHeightElemSelector);
                        toggleFixedHeight.textContent = 'Show less';
                        console.log('clicked 1');
                    } else {
                        fixedHeightElemSelector.classList.add(
                            'overflow-hidden',
                            'hidden-with-shadow'
                        );
                        fixedHeightElemSelector.style.maxHeight = '580px';
                        toggleFixedHeight.textContent = 'Read more...';
                    }
                });
            }
        });
    }
};

const preventRelatedVideoYT = () => {
    if (window.hideYTActivated) return;
    if (typeof YT === 'undefined') {
        let tag = document.createElement('script');
        tag.src = 'https://www.youtube.com/iframe_api';
        let firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    }
    let onYouTubeIframeAPIReadyCallbacks = [];
    for (let playerWrap of document.querySelectorAll('.hytPlayerWrap')) {
        let playerFrame = playerWrap.querySelector('iframe');
        let onPlayerStateChange = function (event) {
            if (event.data == YT.PlayerState.ENDED) {
                playerWrap.classList.add('ended');
            } else if (event.data == YT.PlayerState.PAUSED) {
                playerWrap.classList.add('paused');
            } else if (event.data == YT.PlayerState.PLAYING) {
                playerWrap.classList.remove('ended');
                playerWrap.classList.remove('paused');
            }
        };
        let player;
        onYouTubeIframeAPIReadyCallbacks.push(function () {
            player = new YT.Player(playerFrame, {
                events: {
                    onStateChange: onPlayerStateChange,
                },
            });
        });
        playerWrap.addEventListener('click', function () {
            let playerState = player.getPlayerState();
            if (playerState == YT.PlayerState.ENDED) {
                player.seekTo(0);
            } else if (playerState == YT.PlayerState.PAUSED) {
                player.playVideo();
            }
        });
    }
    window.onYouTubeIframeAPIReady = function () {
        for (let callback of onYouTubeIframeAPIReadyCallbacks) {
            callback();
        }
    };
    window.hideYTActivated = true;
};



export const showDisclaimerMultiStepForm = () => {
    const nextStepBtn = getElement('.next_step');

    if (ifSelectorExist(nextStepBtn)) {
        nextStepBtn.addEventListener('click', () => {
            const disclaimer = getElement('.disclaimer_multistep_form');

            disclaimer.classList.remove('hidden');
        });
    }
};

ready(() => {
    cf7MaskTelValidation();
    cf7Events();
    mainMenu();
    dropdownMenu();
    headerInit();
    formEntry();
    hoverOnButton();
    btnMore();
    btnMoreEducation();
    initFAQ();
    tocAnchor();
    sentNewMessage('.sidebar-form');
    sentNewMessage('.attorney-group__form');
    sentNewMessage('.form');
    sentNewMessage('.how_can_help_form');
    sentNewMessage('.big-auto-footer-form');
    gclid();
    secondStep();
    nextArrow();
    btnMoreFormDesignTwo();
    aosAnimations();
    smoothScrollFn();
    modalDialog();
    // gaEventsCF7();
    initSliders();
    preventRelatedVideoYT();
    showDisclaimerMultiStepForm();
    coCounselForm();
    formModal();
    refferalForm();
});
