(() => {
	const refs = {
		openModalBtn: document.querySelector("[data-second-modal-open]"),
		closeModalBtn: document.querySelector("[data-second-modal-close]"),
		modal: document.querySelector("[data-second-modal]"),
	};

	refs.openModalBtn.addEventListener("click", toggleModal);
	refs.closeModalBtn.addEventListener("click", toggleModal);

	function toggleModal() {
		refs.modal.classList.toggle("is-hidden");
	}
})();
