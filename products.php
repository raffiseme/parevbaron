<div id='collection-component-4955f68c9f8'></div>
<script type="text/javascript">
//<![CDATA[

/* <BuyButton> */
(function () {
  var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
  if (window.ShopifyBuy) {
    if (window.ShopifyBuy.UI) {
      ShopifyBuyInit();
    } else {
      loadScript();
    }
  } else {
    loadScript();
  }

  function loadScript() {
    var script = document.createElement('script');
    script.async = true;
    script.src = scriptURL;
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
    script.onload = ShopifyBuyInit;
  }

  function ShopifyBuyInit() {
    var client = ShopifyBuy.buildClient({
      domain: 'parev-baron.myshopify.com',
      apiKey: 'e4452fba21fdc53e13eff836ca274399',
      appId: '6',
    });

    ShopifyBuy.UI.onReady(client).then(function (ui) {
      ui.createComponent('collection', {
        id: 343101257,
        node: document.getElementById('collection-component-4955f68c9f8'),
        moneyFormat: '${{amount}}',
        options: {
  "product": {
    "buttonDestination": "cart",
    "layout": "vertical",
    "variantId": "all",
    "width": "280px",
    "contents": {
      "img": true,
      "title": true,
      "variantTitle": false,
      "options": true,
      "price": true,
      "description": false,
      "buttonWithQuantity": false,
      "button": true,
      "quantity": false
    },
    "text": {
      "button": "Add to cart"
    },
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "calc(25% - 20px)",
          "margin-left": "20px",
          "margin-bottom": "50px"
        }
      },
      "button": {
        "background-color": "#7f9b70",
        "color": "#ffffff",
        "font-family": "Pacifico, sans-serif",
        "font-size": "13px",
        "padding-top": "14.5px",
        "padding-bottom": "14.5px",
        "padding-left": "26px",
        "padding-right": "26px",
        "border": "none",
        ":hover": {
          "background-color": "#AAD89E",
          "color": "#ffffff"
        },
        "border-radius": "3px",
        ":focus": {
          "background-color": "#AAD89E"
        }
      },
      "variantTitle": {
        "font-family": "Pacifico, sans-serif",
        "font-size": "14px",
        "color": "#4c4c4c"
      },
      "title": {
        "font-family": "Lato, sans-serif",
        "font-weight": "200",
        "font-size": "18px",
        "color": "#4c4c4c"
      },
      "description": {
        "color": "#4c4c4c",
        "font-size": "14px",
        "font-family": "Pacifico, sans-serif"
      },
      "price": {
        "font-family": "Pacifico, sans-serif",
        "font-size": "14px",
        "color": "#4c4c4c"
      },
      "quantityInput": {
        "font-size": "13px",
        "padding-top": "14.5px",
        "padding-bottom": "14.5px",
        "color": "#4c4c4c"
      }
    }
  },
  "cart": {
    "contents": {
      "title": true,
      "lineItems": true,
      "footer": true,
      "button": true
    },
    "text": {
      "title": "Cart",
      "total": "Total",
      "notice": "Shipping and discount codes are added at checkout.",
      "button": "CHECKOUT"
    },
    "styles": {
      "button": {
        "background-color": "#d5e0cf",
        "color": "#ffffff",
        "font-family": "Pacifico, sans-serif",
        "font-size": "13px",
        "padding-top": "14.5px",
        "padding-bottom": "14.5px",
        "padding-left": "26px",
        "padding-right": "26px",
        "border": "none",
        ":hover": {
          "background-color": "#AAD89E",
          "color": "#ffffff"
        },
        "border-radius": "3px",
        ":focus": {
          "background-color": "#AAD89E"
        }
      },
      "cart": {
        "background-color": "#ffffff"
      },
      "footer": {
        "background-color": "#ffffff"
      },
      "title": {
        "color": "#4c4c4c"
      },
      "close": {
        ":hover": {
        }
      }
    }
  },
  "modalProduct": {
    "contents": {
      "img": true,
      "title": true,
      "variantTitle": false,
      "options": true,
      "price": true,
      "description": true,
      "buttonWithQuantity": false,
      "button": true,
      "quantity": false
    },
    "text": {
      "button": "Add to cart"
    },
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "100%",
          "margin-left": "20px",
          "margin-bottom": "50px"
        }
      },
      "button": {
        "background-color": "#d5e0cf",
        "color": "#ffffff",
        "font-family": "Pacifico, sans-serif",
        "font-size": "13px",
        "padding-top": "14.5px",
        "padding-bottom": "14.5px",
        "padding-left": "26px",
        "padding-right": "26px",
        "border": "none",
        ":hover": {
          "background-color": "#97d1e5",
          "color": "#ffffff"
        },
        "border-radius": "3px",
        ":focus": {
          "background-color": "#97d1e5"
        }
      },
      "variantTitle": {
        "font-family": "Pacifico, sans-serif",
        "font-size": "14px",
        "color": "#4c4c4c"
      },
      "title": {
        "font-family": "Pacifico, sans-serif",
        "font-weight": "bold",
        "font-size": "26px",
        "color": "#4c4c4c"
      },
      "description": {
        "color": "#4c4c4c",
        "font-size": "14px",
        "font-family": "Pacifico, sans-serif"
      },
      "price": {
        "font-family": "Pacifico, sans-serif",
        "font-size": "14px",
        "color": "#4c4c4c"
      },
      "quantityInput": {
        "font-size": "13px",
        "padding-top": "14.5px",
        "padding-bottom": "14.5px",
        "color": "#4c4c4c"
      }
    }
  },
  "productSet": {
    "styles": {
      "products": {
        "@media (min-width: 601px)": {
          "margin-left": "-20px"
        }
      }
    }
  },
  "toggle": {
    "styles": {
      "toggle": {
        "font-family": "Pacifico, sans-serif",
        "background-color": "#d5e0cf",
        ":hover": {
          "background-color": "#AAD89E"
        },
        ":focus": {
          "background-color": "#AAD89E"
        }
      },
      "count": {
        "font-size": "13px"
      }
    }
  },
  "modal": {
    "styles": {
      "modal": {
        "background-color": "#ffffff"
      }
    }
  },
  "option": {
    "styles": {
      "label": {
        "font-family": "Pacifico, sans-serif",
        "font-weight": "normal",
        "color": "#4c4c4c"
      },
      "select": {
        "font-family": "Pacifico, sans-serif",
        "font-weight": "normal",
        "color": "#4c4c4c"
      }
    }
  }
}
      });
    });
  }
})();
/* </BuyButton> */
//]]>
</script>