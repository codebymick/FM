{
  "name": "freddymutnosh.com/wp",
  "description": "PSD to Responsive HTML | PSD to HTML5 | PSD to Wordpress",
  "url": "https:\/\/www.freddymutnosh.com",
  "home": "https:\/\/www.freddymutnosh.com",
  "namespaces": ["oembed\/1.0"],
  "authentication": [],
  "routes": {
    "\/": {
      "namespace": "",
      "methods": ["GET"],
      "endpoints": [{
        "methods": ["GET"],
        "args": {
          "context": {
            "required": false,
            "default": "view"
          }
        }
      }],
      "_links":
        "self": "https:\/\/www.freddymutnosh.com\/wp\/wp-json\/"
      }
    },
    "\/oembed\/1.0": {
      "namespace": "oembed\/1.0",
      "methods": ["GET"],
      "endpoints": [{
        "methods": ["GET"],
        "args": {
          "namespace": {
            "required": false,
            "default": "oembed\/1.0"
          },
          "context": {
            "required": false,
            "default": "view"
          }
        }
      }],
      "_links": {
        "self": "https:\/\/www.freddymutnosh.com\/wp\/wp-json\/oembed\/1.0"
      }
    },
    "\/oembed\/1.0\/embed": {
      "namespace": "oembed\/1.0",
      "methods": ["GET"],
      "endpoints": [{
        "methods": ["GET"],
        "args": {
          "url": {
            "required": true
          },
          "format": {
            "required": false,
            "default": "json"
          },
          "maxwidth": {
            "required": false,
            "default": 600
          }
        }
      }],
      "_links": {
        "self": "https:\/\/www.freddymutnosh.com\/wp\/wp-json\/oembed\/1.0\/embed"
      }
    }
  },
  "_links": {
    "help": [{
      "href": "http:\/\/v2.wp-api.org\/"
    }]
  }
}
