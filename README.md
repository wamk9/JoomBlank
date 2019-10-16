# JoomBlank
Template to use where you need to create a new Joomla Template without stress (And with many features). Based/inspired on Bloggerschmidt/Blank repository.

## My Motivation
I always used the [Bloggerschmidt's repository](https://github.com/Bloggerschmidt/Blank) when i'm developing a website template.
There i could find everything I needed, but I also noticed that there were a lot of things I'd like to change, including more automated use of template (including some CDNs).

## Features Used
- jQuery 3.4.1 (Minify by CdnJS)
- Bootstrap 4.3.1 (Minify by CdnJS)
- Popper.js (Minify by CdnJS)
- FontAwesome 5.11.2 (Minify by CdnJS)
- [Vanilla LazyLoad 12.0.3](https://github.com/verlok/lazyload) (By @Verlok - Minify by CdnJS)

## How to Use: WebP Support + LazyLoad
Now, the more used word in web development are "Page Speed" (FASTER FASTER FAAAAAAAASTER), and to do this new "differential" I use a code recommended by Google to verify WebP support in the browser and the Lazy Load, created by Verlok.

But Verlok's repositore don't use the "WebP detector", with the dev choising the classic (JPG/PNG) to use his framework or freezing your heart and going to WebP, forgething our loved IE (NOP)... 

Well.. I coded "some thing" to use both, it's some complicated, but with time this will receive some improvement...

To use both features, you need insert a class at tag named 'lazy' and one (or two) data attrib:

`<span id="brand" class="lazy" data-img-name="brand" data-img-type="bg"></span>`

On `data-img-name`, you set the var presented at JS file (yes... I will explain later), `data-img-type` it's optional, used only if you need to set a background-img, to do it you need set `bg` here.

Going to the JS File (`/js/script.js`), you have to set some info (if you used my structure, only need insert the file info)

```
  var folderUrl = {
    'compatible' : '/templates/nutrinathanafernandes.com.br/images/compatible/',
    'webp' : '/templates/nutrinathanafernandes.com.br/images/webp/'
  };

  var imagesName = {
    'brand' : ['default/', 'brand', '.png']
  };
  
  images['brand'] = folderUrl.compatible + imagesName.brand[0] + imagesName.brand[1] + imagesName.brand[2];

  imagesWebp['brand'] = folderUrl.webp + imagesName.brand[0] + imagesName.brand[1] + '.webp';
```

Well, the code say everything. You need to set the folder URI of WebP and Compatible images (PNG/JPG), after you need to set the name of image (used at `data-img-name`) on `imagesName` with the rest of URI and the format of compatible. With this setted, just join the info at `images` and `imagesWebp` and done, easy? Maybe...
