/**
  * MODAL
  */

 class Modal {

  constructor() {
    this.modalTrigger = $('.js-modal-trigger');
    this.modal = $('.modal');
    this.modalClose = $('.modal__close');
    this.events();
  }

  events() {
    // click on open modal
    this.modalTrigger.click(this.openModal.bind(this)) //bind 'this' keyword to what it is set to

    // click on x close btn
    this.modalClose.click(this.closeModal.bind(this));

    // keyup event
    $(document).keyup(this.keyPressHandler.bind(this));
  }

  keyPressHandler(e) {
    if (e.keyCode == 27) {
      this.closeModal();
    }
  }

  openModal() {
    this.modal.addClass('modal--is-open');
    return false; //prevent default behavior of link click
  }

  closeModal() {
    this.modal.removeClass('modal--is-open');
  }


 }//Modal

 export default Modal;