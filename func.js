function sortPriceHighToLow()
{

    const products = document.getElementsByClassName("products");
    const cards = Array.from(products);

    cards.sort((a,b) => {
        const cardA = parseFloat(a.getAttribute("data-price"));
        const cardB = parseFloat(b.getAttribute("data-price"));
        return cardA - cardB;
    });

    products.innerHTML = '';

    for(card in cards)
    {
        products.appendChild(card);
    }
}


