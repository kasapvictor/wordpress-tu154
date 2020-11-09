//https://tu154.site/wp-json/wc/v3/products/20?consumer_key=ck_573416e95f7b06af9d67f9d3aa320987ec1c275a&consumer_secret=cs_cfa4b02c22c6c6bfe397fc2233cbdc7acaab738f

const asaleProducts = document.querySelectorAll('[data-asale-product]');

if (asaleProducts) {
	asaleProducts.forEach( product => product.addEventListener('click', getProductInfo));
}

/* получаем данные продукта по id */
async function getProductInfo () {
	const asalePopup = document.querySelector('.asale-popup');
	const asalePopupLoader = asalePopup.querySelector('.asale-loader');
	document.body.style = 'overflow:hidden';
	asalePopup.style.display = 'flex';

	const id = this.dataset.asaleProuctId;
	const url = `https://tu154.site/wp-json/wc/v3/products/${id}?consumer_key=ck_573416e95f7b06af9d67f9d3aa320987ec1c275a&consumer_secret=cs_cfa4b02c22c6c6bfe397fc2233cbdc7acaab738f`
	const response = await fetch(url);
	const result = await response.json();

	asalePopupLoader.style.display = 'none';
	showProductInfo(result);
}

/* отображаем данные */
function showProductInfo (dataProduct) {
	console.log(dataProduct)
	const asalePopup = document.querySelector('.asale-popup');
	const asaleTitle = asalePopup.querySelector('.asale-product-title');
	const asaleImage = asalePopup.querySelector('.asale-product-image');
	const asaleDescription = asalePopup.querySelector('.asale-product-description');
	const asaleCost = asalePopup.querySelector('.asale-product-cost');
	const asaleLink = asalePopup.querySelector('.asale-product-link');
	const asaleCloseButton = asalePopup.querySelector('.asale-button-close');
	const asaleCloseBg = asalePopup.querySelector('.asale-bg-close');
	const asalePopupLoader = asalePopup.querySelector('.asale-loader');

	document.body.style = 'overflow:hidden';
	asalePopup.style.display = 'flex';
	asaleTitle.innerHTML = `<h2>${dataProduct.name}</h2>`;
	asaleImage.style.backgroundImage = `url('${dataProduct.images[0].src}')`;
	asaleDescription.innerHTML = dataProduct.short_description;
	asaleCost.innerHTML = `${dataProduct.price} ₽`;
	asaleLink.setAttribute('href', dataProduct.permalink);

	/* закрыть popup */
	asaleCloseBg.onclick = () => {
		asalePopup.style.display = 'none';
		document.body.style = 'overflow:auto';
		asalePopupLoader.style.display = 'flex';
	}
	asaleCloseButton.onclick = () => {
		asalePopup.style.display = 'none';
		document.body.style = 'overflow:auto';
		asalePopupLoader.style.display = 'flex';
	}
}