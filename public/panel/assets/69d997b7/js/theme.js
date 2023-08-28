$(document).ready(function() {
	new TabsNavigator({
		buttons: '.dashboard_btn',
		itemsBlock: '.dashboard_window',
		activeButton: 'dashboard_btn__active',
		displayBlockItemActive: 'dashboard_window__active',
		classDisplayNone: 'd-none',
	}); 

	const transferBlockItemElems = document.querySelectorAll('.transfer-block__percent .amount');
	const uploadDocumentsChooseElem = document.querySelectorAll('.upload-documents_ind-verification_item');
	const uploadBtnsControl = document.querySelectorAll('.upload-documents__control-block.upload-btns-control');
	const closeModalCreateAccountBtn = document.querySelector('.close-modal-create-account');
	const profileOpenFileBtn = document.querySelector('.open-file__btn');
	const profileUserFormFileAvatar = document.querySelector('#userform-file_avatar');
	const chooseDepositMethodBtn = document.querySelectorAll('.payments__table .payment-link');
	const makeDepositSelectElem = document.querySelector('.deposit #mttransactions-transaction_currency');
	// const makeDepositAmountInputElem = document.querySelector('.deposit #mttransactions-transaction_amount_credited');
	// const makeDepositCurrencyTypeLabel = document.querySelector('.deposit .ctm-group .currency-type-label');
	// const makeDepositCurrencyTypePlaceholder = document.querySelector('.deposit #mttransactions-transaction_amount');

	if (transferBlockItemElems) {
		transferBlockItemElems.forEach(item => {
			item.previousElementSibling.children[0].style.width = `${item.dataset.transferPercentAmount}%`
		});
	}

	if (uploadDocumentsChooseElem) {
		uploadDocumentsChooseElem.forEach(item => {
			item.addEventListener('click', () => {
				uploadBtnsControl.forEach(block => block.style.display = 'flex');
			})
		});
	}

	if (closeModalCreateAccountBtn) {
		closeModalCreateAccountBtn.addEventListener('click', () => {
			closeModalCreateAccountBtn.parentElement.parentElement.classList.remove('modal__open');
		});
	}

	if (profileOpenFileBtn) {
		profileOpenFileBtn.addEventListener('click', () => {
			profileUserFormFileAvatar.click();
		});
	}

	if (chooseDepositMethodBtn) {
		const chooseCurrencyTypeSelectOption = (method) => {
			switch (method) {
				case '15':
				case '14':
				case '54':
				// makeDepositSelectElem.classList.add('disabled');
				// makeDepositSelectElem.setAttribute('disabled', 'disabled');
					break;
				default:
				makeDepositSelectElem.classList.remove('disabled');
				makeDepositSelectElem.removeAttribute('disabled', 'disabled');
			}
			// makeDepositCurrencyTypeLabel.textContent = currency;
			// makeDepositCurrencyTypePlaceholder.placeholder = `Deposit Amount, ${currency}`;
			// setTimeout(() => {
			// 	makeDepositAmountInputElem.value = '';
			// }, 600);
			// makeDepositSelectElem.setAttribute('disabled', 'disabled');
			// makeDepositSelectElem.style.background = '#F5F5F5';
			// setTimeout(() => {
			// 	makeDepositSelectElem.value = currency;
			// }, 300);
		};

		chooseDepositMethodBtn.forEach(btn => {
			btn.addEventListener('click', () => {
				$('.deposit #mttransactions-transaction_currency').find('option').remove();
				chooseCurrencyTypeSelectOption(btn.dataset.transferMethod);
			});
		});

		// makeDepositAmountInputElem.addEventListener('click', () => {
		// 	makeDepositAmountInputElem.value = '';
		// });
	}
})

