var routes = [
    {
        path: '/',
        url: './index.html',
        name: 'home',
        on: {
            pageAfterIn: function (e, page) {
            },
            pageInit: function (e, page) {
                /* when page is initialized */
            }
        }
    },
    {
        path: '/home/',
        url: './index.html',
        name: 'home'
    },
    {
        path: '/storm/',
        url: './pages/market-storm.html',
        name: 'market-storm'
    },
    {
        path: '/customers/',
        url: './pages/customers.html',
        name: 'customets-page'
    },
    {
        path: '/new-customer/',
        url: './pages/new-customer.html',
        name: 'new-customer'
    },
    {
        path: '/products/',
        url: './pages/products.html',
        name: 'products'
    },
    {
        path: '/record-sales/',
        url: './pages/record-sales.html',
        name: 'record-sales'
    },
    {
        path: '/product-details/:id/:name/:price/:image/:barcode/',
        url: './pages/product-details.html',
        name: 'product-details'
    },
    {
        path: '/profile/',
        url: './pages/profile.html',
        name: 'profile-page'
    },
    {
        path: '/group-chat/',
        url: './pages/group-chat.html',
        name: 'group-chat'
    },
    {
        path: '/visits-history/',
        url: './pages/visits-history.html',
        name: 'visits-history'
    },
    {
        path: '/reports/',
        url: './pages/reports-page.html',
        name: 'reports-page'
    },
    {
        path: '/login/',
        name: 'login'
    },
    {
        path: '/user-details/:userphone/',
        url: './pages/user-details.html',
        name: 'user-details'
    },
    {
        path: '/adobt-a-store/:id/',
        url: './pages/adopt-a-store.html',
        name: 'login',
        on: {
            pageAfterIn: function (e, page) {
                /* when page gets into view */

            },
            pageInit: function (e, page) {
                /* when page is initialized */
            }
        }
    },
    {
        path: '/stores-page/',
        url: './pages/stores-page.html',
        name: 'store-page'
    },
    {
        path: '/store-status/:id/:name/:location/',
        url: './pages/store-status.html',
        name: 'store-status'
    },
    {
        path: '/new-store/',
        url: './pages/new-store.html',
        name: 'new-store'
    }
];
