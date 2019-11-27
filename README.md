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

Well.. I coded "some thing" to use both, you can see how it works at [ModernizeImage repository](https://github.com/wamk9/ModernizeImage).
