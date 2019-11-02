window.onload  = function ()
{ 
  var folderUrl = {
    'compatible' : '/templates/nutrinathanafernandes.com.br/images/compatible/',
    'webp' : '/templates/nutrinathanafernandes.com.br/images/webp/'
  };

  var imagesName = {
    'brand' : ['default/', 'brand', '.png'],
    'navbarTopBg' : ['default/', 'navbartop-bg', '.png'],
    'footerBg' : ['default/', 'footer-bg', '.png']
  };

  var images = [], imagesWebp = [];
  
  images['navbarTopBg'] = folderUrl.compatible + imagesName.navbarTopBg[0] + imagesName.navbarTopBg[1] + imagesName.navbarTopBg[2];
  images['brand'] = folderUrl.compatible + imagesName.brand[0] + imagesName.brand[1] + imagesName.brand[2];
  images['footerBg'] = folderUrl.compatible + imagesName.footerBg[0] + imagesName.footerBg[1] + imagesName.footerBg[2];

  imagesWebp['brand'] = folderUrl.webp + imagesName.brand[0] + imagesName.brand[1] + '.webp';
  imagesWebp['navbarTopBg'] = folderUrl.webp + imagesName.navbarTopBg[0] + imagesName.navbarTopBg[1] + '.webp';
  imagesWebp['footerBg'] = folderUrl.webp + imagesName.footerBg[0] + imagesName.footerBg[1] + '.webp';


 
  
  // check_webp_feature:
  //   'feature' can be one of 'lossy', 'lossless', 'alpha' or 'animation'.
  //   'callback(feature, isSupported)' will be passed back the detection result (in an asynchronous way!)
  function check_webp_feature(feature, callback) 
{
    var kTestImages = {
        lossy: "UklGRiIAAABXRUJQVlA4IBYAAAAwAQCdASoBAAEADsD+JaQAA3AAAAAA",
        lossless: "UklGRhoAAABXRUJQVlA4TA0AAAAvAAAAEAcQERGIiP4HAA==",
        alpha: "UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAARBxAR/Q9ERP8DAABWUDggGAAAABQBAJ0BKgEAAQAAAP4AAA3AAP7mtQAAAA==",
        animation: "UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA"
    };
    var img = new Image();
    img.onload = function () {
        var result = (img.width > 0) && (img.height > 0);
        callback(feature, result);
    };
    img.onerror = function () {
        callback(feature, false);
    };
    img.src = "data:image/webp;base64," + kTestImages[feature];
  }
  
  check_webp_feature('lossy', function (feature, isSupported) 
  {
    var i, imagesElement;
    
    imagesElement = document.querySelectorAll('[data-img-name]');
    
    /* Verify all elements with 'data-img-name' and set the data-src or data-bg for LazyLoad*/
    if (isSupported)
    {
      console.log('Navegador compatível com WebP... Ativando imagens Webp...');

      for(var i = 0, len = imagesElement.length; i < len; i++) 
      {
        // if URI has setted (use .webp and compatible images at same folder)
        if (imagesElement[i].hasAttribute('data-uri') && imagesElement[i].hasAttribute('data-img-name') && imagesElement[i].hasAttribute('data-img-format'))
        {
          
          var fileUri =  imagesElement[i].getAttribute('data-uri') + '/';
          var fileName = imagesElement[i].getAttribute('data-img-name');
          var fileFormat = '.' + imagesElement[i].getAttribute('data-img-format');
          // Verify if webp file exists, if doesn't, use compatible image
          if (imagesElement[i].getAttribute('data-has-webp') == 'true')
          {
            // Used for background-image
            if (imagesElement[i].getAttribute('data-img-type') == 'bg')
            {
              imagesElement[i].setAttribute('data-bg', 'url(' + fileUri + fileName + '.webp)');
            }
            
            // Used for src attrib
            else
            {
              imagesElement[i].setAttribute('data-src', fileUri + fileName + '.webp');
            }
          }
          else
          {
            // Used for background-image
            if (imagesElement[i].getAttribute('data-img-type') == 'bg')
            {
              imagesElement[i].setAttribute('data-bg','url('+ fileUri + fileName + fileFormat + ')');
            }
            // Used for src attrib
            else
            {
              imagesElement[i].setAttribute('data-src', fileUri + fileName + fileFormat);
            }
          }
        }
        // But if you set the filename at JS, the script do it...
        else
        {
          // Used for background-image
          if (imagesElement[i].getAttribute('data-img-type') == 'bg')
          {
            imagesElement[i].setAttribute('data-bg','url('+ imagesWebp[imagesElement[i].getAttribute('data-img-name')]+')');
          }
          
          // Used for src attrib
          if (imagesElement[i].hasAttribute('data-img-name'))
          {
            imagesElement[i].setAttribute('data-src',imagesWebp[imagesElement[i].getAttribute('data-img-name')]);
          }
        }
      }
    }
    else
    { 
      console.log('Navegador NÃO compatível com WebP... Ativando imagens padrões...');

      for(var i = 0, len = imagesElement.length; i < len; i++) 
      {
        // if URI has setted (use .webp and compatible images at same folder)
        if (imagesElement[i].hasAttribute('data-uri') && imagesElement[i].hasAttribute('data-img-name') && imagesElement[i].hasAttribute('data-img-format'))
        {
          var fileUri =  '/' + imagesElement[i].getAttribute('data-uri') + '/';
          var fileName = imagesElement[i].getAttribute('data-img-name');
          var fileFormat = '.' + imagesElement[i].getAttribute('data-img-format');
                    
          // Used for background-image
          if (imagesElement[i].getAttribute('data-img-type') == 'bg')
          {
            imagesElement[i].setAttribute('data-bg','url('+ fileUri + fileName + fileFormat + ')');
          }
          // Used for src attrib
          else
          {
             imagesElement[i].setAttribute('data-src', fileUri + fileName + fileFormat);
          }
        }
        // But if you set the filename at JS, the script do it...
        else
        {
          // Used for background-image
          if (imagesElement[i].getAttribute('data-img-type') == 'bg')
          {
            imagesElement[i].setAttribute('data-bg','url('+imagesWebp[imagesElement[i].getAttribute('data-img-name')]+')');
          }
          // Used for src attrib
          if (imagesElement[i].hasAttribute('data-img-name'))
          {
            imagesElement[i].setAttribute('data-src',imagesWebp[imagesElement[i].getAttribute('data-img-name')]);
          }
        }
      }
    }
  
    
    /* LazyLoad doing what his do (??????) */
    (function() {
      function logElementEvent(eventName, element) {
        console.log(
          Date.now(),
          eventName,
          element.getAttribute("data-bg"),
          element.getAttribute("data-src")
        );
      }
      var callback_enter = function(element) {
        logElementEvent("🔑 ENTERED", element);
      };
      var callback_exit = function(element) {
        logElementEvent("🚪 EXITED", element);
      };
      var callback_reveal = function(element) {
        logElementEvent("👁️ REVEALED", element);
      };
      var callback_loaded = function(element) {
        logElementEvent("👍 LOADED", element);
      };
      var callback_error = function(element) {
        logElementEvent("💀 ERROR", element);
        element.src =
          "https://via.placeholder.com/440x560/?text=Error+Placeholder";
      };
      var callback_finish = function() {
        logElementEvent("✔️ FINISHED", document.documentElement);
      };
      var ll = new LazyLoad({
        elements_selector: ".lazy",
        // Assign the callbacks defined above
        callback_enter: callback_enter,
        callback_exit: callback_exit,
        callback_reveal: callback_reveal,
        callback_loaded: callback_loaded,
        callback_error: callback_error,
        callback_finish: callback_finish
      });
    })();  
  });
};