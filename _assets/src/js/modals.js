import A11yDialog from 'a11y-dialog';
import { getElement, getElements, ifSelectorExist } from './utils';

export const modalDialog = () => {
    const dialogContainer = document.querySelector('#testimonialDialog');

    // Variable to keep track of the currently active video iframe
    let activeIframe = null;

    if (ifSelectorExist(dialogContainer)) {
        const videoReviewsDialog = new A11yDialog(dialogContainer);

        let fireTestimonialModalSelector = getElements('.fireTestimonialModal');
        if (ifSelectorExist(fireTestimonialModalSelector)) {
            Array.from(fireTestimonialModalSelector).forEach(item => {
                item.addEventListener('click', () => {
                    // Hide all modal videos
                    let modalVideos = getElements('.hytPlayerWrapOuter');
                    Array.from(modalVideos).forEach(item => {
                        item.classList.add('hidden');
                    });

                    // Find the clicked video's container and set its iframe as the active iframe
                    let itemYtUrl = item.getAttribute('data-yt-url');
                    let container = document.querySelector(
                        `.hytPlayerWrapOuter-${itemYtUrl}`
                    );
                    if (container) {
                        activeIframe = container.querySelector('iframe');
                        container.classList.toggle('hidden');
                    }

                    // Manually show the modal after setting activeIframe
                    videoReviewsDialog.show();
                });
            });
        }

        videoReviewsDialog.on('hide', function (dialogEl, event) {
            // Pause the active iframe
            if (activeIframe && activeIframe.contentWindow) {
                activeIframe.contentWindow.postMessage(
                    '{"event":"command","func":"pauseVideo","args":""}',
                    'https://www.youtube.com'
                );
            }

            // Reset activeIframe to prevent it from being played again when opening another video
            activeIframe = null;
        });

        videoReviewsDialog.on('show', function (dialogEl, event) {
            setTimeout(() => {
                activeIframe.contentWindow.postMessage(
                    '{"event":"command","func":"playVideo","args":""}',
                    'https://www.youtube.com'
                );
            }, 500); // 500ms delay
        });
    }
};

export const formModal = () => {
    let modalWindow = getElement('.form-modal-window');
    let modalWindowOpen = getElement('.text-button-block.form-modal .btn');

    // Functions
    let openModal = () => {
        modalWindow.classList.add('open');
        document.body.style.overflow = 'hidden';
    };

    let closeModal = () => {
        modalWindow.classList.add('fade-out');
        setTimeout(() => {
            modalWindow.classList.remove('open', 'fade-out');
            document.body.style.overflow = null;
        }, 300);
    };

    if (ifSelectorExist(modalWindowOpen)) {
        modalWindowOpen.addEventListener('click', () => {
            openModal();
        });
    }

    if (ifSelectorExist(modalWindow)) {
        modalWindow.addEventListener('click', e => {
            if (e.target === modalWindow) {
                closeModal();
            }
        });

        window.onkeydown = e => {
            if (e.key === 'Escape') {
                closeModal();
            }
        };
    }
};


export const formModalBanner = () => {
    let modalWindowBtn = getElement('.form-modal-window-banner');
    let modalWindowOpenBanner = getElement('.form-modal-banner .btn');

    // Functions
    let openModal = () => {
        modalWindowBtn.classList.add('open');
        document.body.style.overflow = 'hidden';
    };

    let closeModal = () => {
        modalWindowBtn.classList.add('fade-out');
        setTimeout(() => {
            modalWindowBtn.classList.remove('open', 'fade-out');
            document.body.style.overflow = null;
        }, 300);
    };

    if (ifSelectorExist(modalWindowOpenBanner)) {
        modalWindowOpenBanner.addEventListener('click', () => {
            openModal();
        });
    }

    if (ifSelectorExist(modalWindowBtn)) {
        modalWindowBtn.addEventListener('click', e => {
            if (e.target === modalWindowBtn) {
                closeModal();
            }
        });

        window.onkeydown = e => {
            if (e.key === 'Escape') {
                closeModal();
            }
        };
    }
};
