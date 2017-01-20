/**
 *  Javascript SimpleModal library by Lewis Nelson
 *
 *  Author, Lewis Nelson http://www.lewnelson.com
 *
 *  Full source, docs and license available on GitHub
 *  https://github.com/lewnelson/simple-modal
 */

/**
 *  Default global options for SimpleModal
 *
 */
var SimpleModalOptions = {
  disableScrolling: true,
  transitionTime: 400,
  titleTag: 'h4',
  maximumModals: 6,
  onComplete: null,
  theme: null,
  closableOnOutsideClick: true
};

/**
 *  Creates a new instance of SimpleModal
 *
 */
function SimpleModal(options) {
  /**
   *  Contains modal options passed on creating instance
   *
   *  @param object
   */
  var localOptions;

  /**
   *  Reference to self
   *
   *  @param object
   */
  var modal = this;

  /**
   *  Reference to the modal element attached to instance
   *
   *  @param object {javascript node}
   */
  var modalElement;

  /**
   *  Reference to the modal background element attached to instance
   *
   *  @param object {javascript node}
   */
  var modalBackgroundElement;

  /**
   *  All valid modal sizes
   *
   *  @param array
   */
  var validSizes = [
    'extra-small',
    'small',
    'medium',
    'large',
    'extra-large'
  ];

  /**
   *  Default option fallbacks
   *
   *  @param object
   */
  var defaultOptions = {
    size: 'extra-small',
    title: '',
    body: '',
    closable: true,
    closableOnOutsideClick: true,
    titleTag: 'h4'
  }

  /**
   *  Valid button options and types
   *
   *  @param object
   */
  var validButtonOptions = {
    class: 'string',
    callback: 'function',
    value: 'string'
  };

  /**
   *  Default button options fallbacks
   *
   *  @param object
   */
  var defaultButtonOptions = {
    value: 'button',
    class: null,
    callback: function(){}
  }

  /**
   *  Sets the local options
   *
   *  @param object options
   *  @return void
   */
  function setOptions(options) {
    if(typeof options === 'undefined') {
      var options = {};
    }

    localOptions = options;
  }

  /**
   *  Returns option from localOptions or null
   *  if option does not exist
   *
   *  @param string option
   *  @return mixed
   */
  function getOption(option) {
    if(typeof localOptions[option] === 'undefined') {
      return null;
    } else {
      return localOptions[option];
    }
  }

  /**
   *  Gets modal size from set options or default fallbacks
   *
   *  @return string
   */
  function getSize() {
    var sizeOption = getOption('size');
    if(sizeOption === null) {
      var size = defaultOptions.size;
    } else {
      if(typeof sizeOption === 'string') {
        if(validSizes.indexOf(sizeOption) === '-1') {
          var size = defaultOptions.size;
        } else {
          var size = sizeOption;
        }
      } else {
        throw new Error('Invalid type for option, `size`. Expecting type string.');
      }
    }

    return size;
  }

  /**
   *  Gets modal theme from options if set or no themes is used
   *
   *  @return string
   */
  function getTheme() {
    var themeOption = getOption('theme');
    var theme = null;
    if(themeOption !== null) {
      if(typeof themeOption === 'string') {
        var theme = themeOption;
      }
    } else {
      if(typeof window.SimpleModalOptions.theme === 'string') {
        var theme = window.SimpleModalOptions.theme;
      }
    }

    return theme;
  }

  /**
   *  Gets the tag type for the modal title
   *
   *  @return string
   */
  function getTitleElementTag() {
    var titleTagOption = getOption('titleTag');
    var titleTag = window.SimpleModalOptions.titleTag;
    if(titleTagOption !== null) {
      if(typeof titleTagOption === 'string') {
        var titleTag = titleTagOption;
      }
    } else {
      if(typeof titleTag !== 'string') {
        var titleTag = defaultOptions.titleTag;
      }
    }

    return titleTag;
  }

  /**
   *  Gets modal title from set options or default fallback
   *
   *  @return string
   */
  function getTitle() {
    var titleOption = getOption('title');
    if(titleOption === null) {
      var title = defaultOptions.title;
    } else {
      if(typeof titleOption === 'string') {
        var title = titleOption;
      } else {
        throw new Error('Invalid type for option, `title`. Expecting type string.');
      }
    }

    return title;
  }

  /**
   *  Gets modal body from set options or default fallback
   *
   *  @return string
   */
  function getBody() {

    var bodyOption = getOption('body');
    if(bodyOption === null) {
      var body = defaultOptions.body;
    } else {
      if(typeof bodyOption === 'string') {
        var body = bodyOption;
      } else {
        throw new Error('Invalid type for option, `body`. Expecting type string.');
      }
    }

    return body;
  }

  /**
   *  Detects if modal should be closable by close icon based on options and defaults
   *
   *  @return boolean
   */
  function isClosable() {
    var closableOption = getOption('closable');
    if(closableOption === null) {
      var closable = defaultOptions.closable;
    } else {
      if(typeof closableOption === 'boolean') {
        var closable = closableOption;
      } else {
        throw new Error('Invalid type for option, `closable`. Expecting type boolean.');
      }
    }

    return closable;
  }

  /**
   *  Detects if modal should be closable by clicking outside the modal
   *  based on options and default options
   *
   *  @return boolean
   */
  function isClosableOnOutsideClick() {
    var closableOnOutsideClickOption = getOption('closableOnOutsideClick');
    if(closableOnOutsideClickOption === null) {
      if(typeof window.SimpleModalOptions.closableOnOutsideClick === 'boolean') {
        var closableOnOutsideClick = window.SimpleModalOptions.closableOnOutsideClick;
      } else {
        var closableOnOutsideClick = defaultOptions.closableOnOutsideClick;
      }
    } else {
      if(typeof closableOnOutsideClickOption === 'boolean') {
        var closableOnOutsideClick = closableOnOutsideClickOption;
      } else {
        throw new Error('Invalid type for option, `closableOnOutsideClick`. Expecting type boolean.');
      }
    }

    return closableOnOutsideClick;
  }

  /**
   *  Builds buttons from set options and defaults
   *
   *  @return array
   */
  function getButtonOptions() {
    var buttonsOption = getOption('buttons');
    var completeButtonOptions = [];
    if(buttonsOption !== null) {
      if(typeof buttonsOption !== 'object') {
        throw new Error('Invalid type for option, `buttons`. Expecting type object.');
      } else {
        for(index in buttonsOption) {
          var button = buttonsOption[index];
          for(key in button) {
            if(typeof validButtonOptions[key] === 'undefined') {
              throw new Error('Invalid button option, `' + key + '`.');
            } else {
              var type = validButtonOptions[key];
              if(typeof button[key] !== type && button[key] !== defaultButtonOptions[key]) {
                throw new Error('Invalid type for button option, `' + key + '`. Expecting type ' + type + '.');
              }
            }
          }

          for(defaultOption in defaultButtonOptions) {
            if(typeof button[defaultOption] === 'undefined') {
              button[defaultOption] = defaultButtonOptions[defaultOption];
            }
          }

          completeButtonOptions.push(button);
        }
      }
    }

    return completeButtonOptions;
  }

  /**
   *  Creates button element from button options, setting callback as well
   *
   *  @param object buttonOptions
   *  @return object {javascript node}
   */
  function createButtonElement(buttonOptions) {
    var buttonElement = document.createElement('button');
    if(buttonOptions.value === 'undefined') {
      throw new Error('Missing value for button in SimpleModal');
    }
    var text = document.createTextNode(buttonOptions.value);
    buttonElement.appendChild(text);
    if(buttonOptions.class !== null) {
      buttonElement.classList.add(buttonOptions.class);
    }

    var callback = buttonOptions.callback;
    buttonElement.onclick = function(event) {
      event.preventDefault();
      var result = callback(modal);
      if(typeof result !== 'boolean') {
        var result = true;
      }

      if(result === true) {
        modal.close();
      }
    }

    return buttonElement;
  }

  /**
   *  Gets the transition time in milliseconds
   *
   *  @return integer
   */
  function getTransitionTime() {
    var transitionTime = getOption('transitionTime');
    if(transitionTime === null) {
      var transitionTime = parseInt(window.SimpleModalOptions.transitionTime);
    }

    return transitionTime;
  }

  /**
   *  Event handler for clicks outside of modal
   *
   *  @param object event {javascript event}
   *  @return void
   */
  function outsideModalClickEvent(event) {
    if(isClosableOnOutsideClick() === true) {
      modal.close();
    }
  }

  /**
   *  Gets set background opacity for modal from options
   *
   *  @return float
   */
  function getBackgroundOpacity() {
    var backgroundOpacityOption = getOption('backgroundOpacity');
    if(backgroundOpacityOption !== null) {
      backgroundOpacityOption = parseFloat(backgroundOpacityOption);
      if(backgroundOpacityOption > 1) {
        var backgroundOpacity = 1;
      } else if(backgroundOpacityOption < 0) {
        var backgroundOpacity = 0;
      } else {
        var backgroundOpacity = backgroundOpacityOption;
      }
    } else {
      var backgroundOpacity = -1;
    }

    return backgroundOpacity;
  }

  /**
   *  Creates and shows the modals background element
   *
   *  @return void
   */
  function showBackground() {
    var backgroundElement = document.createElement('div');
    var theme = getTheme();
    backgroundElement.classList.add('simple-modal-background');
    if(theme !== null) {
      backgroundElement.classList.add(theme);
    }
    backgroundElement.classList.add('simple-modal-hide');
    modalBackgroundElement = backgroundElement;
    document.body.appendChild(backgroundElement);
    var backgroundOpacity = getBackgroundOpacity();
    if(backgroundOpacity < 0) {
      fadeIn(backgroundElement);
    } else {
      fadeIn(backgroundElement, backgroundOpacity);
    }

    setTimeout(function() {
      modalBackgroundElement.addEventListener('click', outsideModalClickEvent);
    }, getTransitionTime());
  }

  /**
   *  Hides abd removes the modals background element
   *
   *  @return void
   */
  function hideBackground() {
    fadeOut(modalBackgroundElement);
    setTimeout(function() {
      var parent = modalBackgroundElement.parentNode;
      if(parent !== null) {
        parent.removeChild(modalBackgroundElement);
      }
    }, getTransitionTime());
  }

  /**
   *  Ran once modal has been shown, will find and run any callbacks to be run once shown
   *
   *  @return void
   */
  function onComplete() {
    var onCompleteCallback = getOption('onComplete');
    if(typeof onCompleteCallback === 'function') {
      onCompleteCallback(modal);
    } else {
      if(typeof window.SimpleModalOptions.onComplete === 'function') {
        onCompleteCallback(modal);
      }
    }
  }

  /**
   *  Checks if scrolling should be disabled and disables if it should
   *
   *  @return void
   */
  function disableScroll() {
    var allModals = document.getElementsByClassName('simple-modal');
    if(allModals.length === 1 && window.SimpleModalOptions.disableScrolling === true) {
      var bodyStyle = getComputedStyle(document.body);
      var previousWidth = parseInt(bodyStyle.width);
      document.body.classList.add('simple-modal-disable-scroll');
      var afterWidth = parseInt(bodyStyle.width);
      var paddingDifference = afterWidth - previousWidth;
      var originalPadding = parseInt(bodyStyle.paddingRight);
      var finalPadding = originalPadding + paddingDifference;
      document.body.style.paddingRight = finalPadding + 'px';
      document.body.setAttribute('data-original-padding', originalPadding + 'px');
    }
  }

  /**
   *  Checks if scrolling should be enabled and enables if it should
   *
   *  @return void
   */
  function enableScroll() {
    var allModals = document.getElementsByClassName('simple-modal');
    if(allModals.length < 1) {
      var bodyClasses = document.body.classList;
      if(bodyClasses.contains('simple-modal-disable-scroll') === true) {
        document.body.classList.remove('simple-modal-disable-scroll');
        var originalPadding = document.body.getAttribute('data-original-padding');
        if(originalPadding === null) {
          var originalPadding = '0px';
        }
        document.body.style.paddingRight = originalPadding;
      }
    }
  }

  /**
   *  Default modal animation function
   *
   *  @param string direction
   *  @param object element {javascript node}
   *  @param float finalOpacity
   *  @return void
   */
  function animateOpacity(direction, element, finalOpacity) {
    var currentStyle = getComputedStyle(element);
    if(direction === 'positive') {
      if(typeof finalOpacity === 'undefined') {
        var finalOpacity = parseFloat(currentStyle.opacity);
      } else {
        var finalOpacity = parseFloat(finalOpacity);
      }
      var currentOpacity = 0;
      element.style.opacity = 0;
      element.style.display = 'block';
    } else {
      var finalOpacity = parseFloat(0);
      var currentOpacity = parseFloat(currentStyle.opacity);
    }
    
    var interval = 20;
    var steps = Math.ceil(getTransitionTime() / interval);
    if(direction === 'positive') {
      var increment = (finalOpacity - currentOpacity) / steps;
    } else {
      var increment = (currentOpacity - finalOpacity) / steps;
    }

    var animationInterval = setInterval(function() {
      var clear = false;
      var opacity = parseFloat(currentStyle.opacity);
      if(direction === 'positive') {
        var newOpacity = opacity + increment;
        if(newOpacity > finalOpacity) {
          newOpacity = finalOpacity;
          clear = true;
        }
      } else {
        if(!isNaN(opacity)) {
          var newOpacity = opacity - increment;
          if(newOpacity < finalOpacity) {
            newOpacity = finalOpacity;
            clear = true;
          }
        }
      }

      if(!isNaN(opacity)) {
        element.style.opacity = newOpacity;
        if(clear === true) {
          clearInterval(animationInterval);
        }
      } else {
        clearInterval(animationInterval);
      }
    }, interval);
  }

  /**
   *  Gets custom fadeIn function from global or local options,
   *  if no custom function found returns null
   *
   *  @return function || null
   */
  function getCustomFadeInFunction() {
    var customFadeInOption = getOption('customFadeIn');
    if(typeof customFadeInOption === 'function') {
      var customFadeIn = customFadeInOption;
    } else {
      if(typeof window.SimpleModalOptions.customFadeIn !== 'undefined') {
        var customFadeIn = window.SimpleModalOptions.customFadeIn;
      } else {
        var customFadeIn = null;
      }
    }

    return customFadeIn;
  }

  /**
   *  Gets custom fadeOut function from global or local options,
   *  if no custom function found returns null
   *
   *  @return function || null
   */
  function getCustomFadeOutFunction() {
    var customFadeOutOption = getOption('customFadeOut');
    if(typeof customFadeOutOption === 'function') {
      var customFadeOut = customFadeOutOption;
    } else {
      if(typeof window.SimpleModalOptions.customFadeOut !== 'undefined') {
        var customFadeOut = window.SimpleModalOptions.customFadeOut;
      } else {
        var customFadeOut = null;
      }
    }

    return customFadeOut;
  }

  /**
   *  Runs fadeIn animation on element either via custom or built in animation function
   *
   *  @return void
   */
  function fadeIn(element, finalOpacity) {
    var customFadeIn = getCustomFadeInFunction();
    if(typeof customFadeIn === 'function') {
      customFadeIn(element, getTransitionTime());
    } else {
      var direction = 'positive';
      if(typeof finalOpacity === 'undefined') {
        animateOpacity(direction, element);
      } else {
        animateOpacity(direction, element, finalOpacity);
      }
    }
  }

  /**
   *  Runs fadeOut animation on element either via custom or built in animation function
   *
   *  @return void
   */
  function fadeOut(element) {
    var customFadeOut = getCustomFadeOutFunction();
    if(typeof customFadeOut === 'function') {
      customFadeOut(element, getTransitionTime());
    } else {
      var direction = 'negative';
      animateOpacity(direction, element);
    }
  }

  /**
   *  If number of modals on page exceeds total allowed modals then they are removed
   *  in the order they were added. Anomalies may occur when setting different animation
   *  times on individual modals.
   *
   *  @return void
   */
  function cleanupModals() {
    var maximumModals = window.SimpleModalOptions.maximumModals;
    if(typeof maximumModals === 'number') {
      maximumModals = parseInt(maximumModals);
      if(maximumModals > 0) {
        var allModals = document.getElementsByClassName('simple-modal');
        var allModalBackgrounds = document.getElementsByClassName('simple-modal-background');
        var total = allModals.length;
        var modalsToRemove = total - maximumModals;
        if(modalsToRemove > 0) {
          for(var i = 0; i < modalsToRemove; i++) {
            var modalToRemove = allModals[i];
            var modalBackgroundToRemove = allModalBackgrounds[i];
            fadeOut(modalToRemove);
            fadeOut(modalBackgroundToRemove);
            setTimeout(function(modalToRemove, modalBackgroundToRemove) {
              var modalParent = modalToRemove.parentNode;
              var backgroundParent = modalBackgroundToRemove.parentNode;
              if(modalParent !== null) {
                modalParent.removeChild(modalToRemove);
              }

              if(backgroundParent !== null) {
                backgroundParent.removeChild(modalBackgroundToRemove);
              }
            }, getTransitionTime(), modalToRemove, modalBackgroundToRemove);
          }
        }
      }
    }
  }

  /**
   *  Builds and shows the modal
   *
   *  @param function callback
   *  @return object {instance of self}
   */
  this.show = function(callback) {
    var newModal = document.createElement('div');
    var size = getSize();
    var theme = getTheme();
    newModal.classList.add('simple-modal');
    if(theme !== null) {
      newModal.classList.add(theme);
    }
    newModal.classList.add('simple-modal-hide');
    newModal.classList.add(size);

    var modalInner = document.createElement('div');
    modalInner.classList.add('simple-modal-inner');

    var closable = isClosable();
    if(closable === true) {
      var closableElement = document.createElement('div');
      closableElement.classList.add('simple-modal-close');
      closableElement.onclick = function(e) {
        e.preventDefault();
        modal.close();
      };
      modalInner.appendChild(closableElement);
    }

    var title = getTitle();
    if(title.length > 0) {
      var modalTitle = document.createElement('div');
      modalTitle.classList.add('simple-modal-title');
      var titleTagElement = document.createElement(getTitleElementTag());
      var titleElement = document.createTextNode(title);
      titleTagElement.appendChild(titleElement);
      modalTitle.appendChild(titleTagElement);
      modalInner.appendChild(modalTitle);
    } else {
      newModal.classList.add('simple-modal-no-title');
    }

    var body = getBody();
    if(body.length > 0) {
      var modalBody = document.createElement('div');
      modalBody.classList.add('simple-modal-body');
      modalBody.innerHTML = body;
      modalInner.appendChild(modalBody);
    } else {
      newModal.classList.add('simple-modal-no-body');
    }

    var buttonsOptions = getButtonOptions();
    if(buttonsOptions.length > 0) {
      var modalButtons = document.createElement('div');
      modalButtons.classList.add('simple-modal-buttons');
      for(index in buttonsOptions) {
        var buttonOptions = buttonsOptions[index];
        var buttonElement = createButtonElement(buttonOptions);
        modalButtons.appendChild(buttonElement);
      }
      modalInner.appendChild(modalButtons);
    } else {
      newModal.classList.add('simple-modal-no-buttons');
    }

    newModal.appendChild(modalInner);
    modalElement = newModal;
    showBackground();
    document.body.appendChild(newModal);
    fadeIn(modalElement);
    onComplete();
    if(typeof callback === 'function') {
      callback(modal);
    }
    disableScroll();
    cleanupModals();
    return modal;
  }

  /**
   *  Closes and deletes modal from DOM
   *
   *  @param function callback
   *  @return object {instance of self}
   */
  this.close = function(callback) {
    if(typeof modalElement !== 'undefined') {
      if(modalElement.parentNode !== null) {
        hideBackground();
        fadeOut(modalElement);

        setTimeout(function() {
          var parent = modalElement.parentNode;
          if(parent !== null) {
            parent.removeChild(modalElement);
          }
          enableScroll();
          if(typeof callback === 'function') {
            callback(modal);
          }
        }, getTransitionTime());
      }
    }

    return modal;
  }

  /**
   *  Force all modals to close
   *
   *  @param callback function
   *  @return object {this}
   */
  this.closeAll = function(callback) {
    var allModals = document.getElementsByClassName('simple-modal');
    var allModalBackgrounds = document.getElementsByClassName('simple-modal-background');
    if(allModals.length > 0) {
      for(var i = 0; i < allModals.length; i++) {
        var modalToRemove = allModals[i];
        var modalBackgroundToRemove = allModalBackgrounds[i];
        fadeOut(modalToRemove);
        fadeOut(modalBackgroundToRemove);
        setTimeout(function(modalToRemove, modalBackgroundToRemove) {
          var modalParent = modalToRemove.parentNode;
          var backgroundParent = modalBackgroundToRemove.parentNode;
          if(modalParent !== null) {
            modalParent.removeChild(modalToRemove);
          }

          if(backgroundParent !== null) {
            backgroundParent.removeChild(modalBackgroundToRemove);
          }
        }, getTransitionTime(), modalToRemove, modalBackgroundToRemove);
      }
    }

    return modal;
  }

  /**
   *  Updates the title text, if no title was given to begin with then no title will be updated
   *
   *  @param string newTitle
   *  @param boolean overwrite
   *  @return object {this}
   */
  this.updateTitle = function(newTitle, overwrite) {
    var titleElement = modalElement.getElementsByClassName('simple-modal-title');
    if(typeof newTitle !== 'string') {
      throw new Error('Invalid value given for titleElement, expecting type string.');
    } else {
      var newTitleElement = document.createElement(getTitleElementTag());;
      var newTitleTextNode = document.createTextNode(newTitle);
      newTitleElement.appendChild(newTitleTextNode);
    }

    if(titleElement.length > 0 && newTitle.length > 0) {
      titleElement[0].innerHTML = '';
      titleElement[0].appendChild(newTitleElement);
      if(typeof overwrite !== 'boolean') {
        var overwrite = false;
      }

      if(overwrite === true) {
        localOptions.title = newTitle;
      }
    } else if(newTitle.length > 0) {
      if(typeof overwrite !== 'boolean') {
        var overwrite = true;
      }

      if(overwrite === true) {
        localOptions.title = newTitle;
      }
    }

    return modal;
  }

  /**
   *  Updates the body content of the modal, if no body was given to begin with then no body will be updated
   *
   *  @param string bodyHtml
   *  @param boolean overwrite
   *  @return object {this}
   */
  this.updateBody = function(bodyHtml, overwrite) {
    var bodyElement = modalElement.getElementsByClassName('simple-modal-body');
    if(typeof bodyHtml !== 'string') {
      throw new Error('Invalid value given for updateBody, expecting type string.');
    }

    if(bodyElement.length > 0) {
      if(typeof overwrite !== 'boolean') {
        var overwrite = false;
      }

      bodyElement[0].innerHTML = bodyHtml;
      if(overwrite === true) {
        localOptions.body = bodyHtml;
      }
    } else {
      if(typeof overwrite !== 'boolean') {
        var overwrite = true;
      }

      if(overwrite === true) {
        localOptions.body = bodyHtml;
      }
    }

    return modal;
  }

  /**
   *  Gets the modal element
   *
   *  @return object {javascript node}
   */
  this.getModalElement = function() {
    var element = null;
    if(typeof modalElement !== 'undefined') {
      if(modalElement.parentNode !== null) {
        var element = modalElement;
      }
    }

    return element;
  }

  /**
   *  Setup SimpleModal instance by setting local options
   *
   */
  setOptions(options);
};