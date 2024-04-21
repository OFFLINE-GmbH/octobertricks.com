
/**
 * Initialize Avatar Form
 * @param {HTMLFormElement} form 
 */
function initializeAvatarForm(form) {
    let avatarField = form.querySelector('#accountUserAvatar');
    let avatarDropzone = avatarField.parentElement;
    let avatarPreview = form.querySelector('.avatar-preview img');
    let avatarLoader = form.querySelector('.avatar-loading');
    let loading = false;

    // Loading Handler
    function setLoading(value) {
        if (value === true) {
            if (avatarLoader) {
                avatarLoader.classList.add('active');
            }
            Array.from(document.querySelectorAll('form button,form input[type="submit"],form input[type="button"]'), btn => {
                btn.disabled = true;
            });
        } else {
            if (avatarLoader) {
                avatarLoader.classList.remove('active');
            }
            Array.from(document.querySelectorAll('form button,form input[type="submit"],form input[type="button"]'), btn => {
                btn.disabled = false;
            });
        }
        loading = value;
    }

    /**
     * Submit Form
     * @param {File} avatar 
     * @returns 
     */
    function onSubmit(avatar) {
        if (loading) {
            return;
        }

        // Validate FileType
        if (['image/gif', 'image/jpeg', 'image/png', 'image/webp'].indexOf(avatar.type) < 0) {
            $.oc.flashMsg({ text: 'The file format of your avatar is invalid, please use only GIF, JPEG, PNG or WebP.', class: 'error' });
            avatarField.value = '';
            return;
        }

        // Validate FileSize
        if (avatar.size > 1024 * 1024) {
            $.oc.flashMsg({ text: 'The file size of your image exceeds the allowed 1 MBit limit.', class: 'error' });
            avatarField.value = '';
            return;
        }

        // Prepare FormData
        let formData = new FormData();
        formData.append('avatar', avatar);

        // Handle
        setLoading(true);
        $(form).request('onUpdate', {
            data: formData,
            redirect: '/account',
            files: true,
            success() {
                let reader = new FileReader;
                reader.onload = () => {
                    avatarPreview.removeAttribute('srcset');
                    avatarPreview.src = reader.result;

                    Array.from(document.querySelectorAll('.avatar__image'), (img) => {
                        img.removeAttribute('srcset');
                        img.src = reader.result;
                    });

                    $.oc.flashMsg({ text: 'Your avatar has been updated successfully.', class: 'success' });
                }
                reader.readAsDataURL(avatar);
            },
            error() {
                $.oc.flashMsg({ text: 'An unknown error occurred, please try again later..', class: 'error' });
            },
            complete() {
                avatarField.value = '';
                setLoading(false);
            }
        })
    }

    /**
     * Set Avatar on Change
     * @param {Event} event 
     * @returns 
     */
    function onChange(event) {
        if (!avatarField || avatarField.files.length == 0) {
            $.oc.flashMsg({ text: 'No valid avatar file selected.', class: 'error' });
            return;
        }
        return onSubmit(avatarField.files[0]);
    }

    /**
     * Set Avatar on Drop
     * @param {Event} event 
     * @returns 
     */
    function handleDropzone(event) {
        event.preventDefault();
        event.stopPropagation();

        // Set
        if (event.type == 'dragenter' || event.type == 'dragover') {
            avatarDropzone.classList.add('in-focus');
        } else {
            avatarDropzone.classList.remove('in-focus');
        }

        // Drop
        if (event.type == 'drop') {
            let files = event.dataTransfer ? (event.dataTransfer.files || []) : [];
            if (files.length == 0) {
                $.oc.flashMsg({ text: 'No valid avatar file dropped.', class: 'error' });
                return;
            }
            return onSubmit(files[0]);
        }
    }

    // Assign Events
    if (avatarField) {
        avatarField.addEventListener('change', onChange);
        avatarField.parentElement.addEventListener('click', () => avatarField.click());
    }

    // Handle Dropzone
    if (avatarDropzone) {
        avatarDropzone.parentElement.addEventListener('dragenter', handleDropzone, false);
        avatarDropzone.parentElement.addEventListener('dragleave', handleDropzone, false);
        avatarDropzone.parentElement.addEventListener('dragover', handleDropzone, false);
        avatarDropzone.parentElement.addEventListener('drop', handleDropzone, false);
    }
}

// Handle
const avatarForm = document.querySelector('form[action="avatar-upload"]');
if (avatarForm) {
    initializeAvatarForm(avatarForm);
}
