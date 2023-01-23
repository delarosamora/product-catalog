import $ from 'jquery'

$(() => {
    const productCards = $('li.product-card')
    const searchText = $('input#search-text')
    const searchCategory = $('select#search-category')

    const doFilter = () => {
        const text = searchText.val().toUpperCase()
        const category = searchCategory.val()
        productCards.each((index, el) => {
            const name = $(el).data('name').toUpperCase()
            const productCategory = $(el).data('category')
            $(el).toggle(name.indexOf(text) > -1 && (category == 0 || category == productCategory))
        })
    }

    searchText.keypress(doFilter)
    searchCategory.change(doFilter)
})