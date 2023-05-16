{{-- 


|--------------------------------------------------------------------------
| Custom assets
|--------------------------------------------------------------------------

Custom assets are stored in the 'custom-assets' directory found inside the 'extra' folder.
Custom assets can be any file you would like to use in your theme.
For example: JS, CSS or image files.

You can load these custom assets with a built-in function, 'themeAsset()'.
Add the file you want to add to your 'custom-assets' folder, and include the name with the file extension in the function.

Down below, you can find a few examples using this function:



--}}

<style> 
@font-face{font-family:'mctit';src:url('{{themeAsset('mctitle.ttf')}}')}
@font-face{font-family:'mctxt';src:url('{{themeAsset('mctitle.ttf')}}')}

  html {
    font-size: 100%; }

      body {
        font-size: 18px;
        line-height: 24px;
        background: #F1F1F1;
        font-family: "mctxt", sans-serif;
        letter-spacing: 0.1em;
        color: #ffffff;
      }

        @keyframes background-image-animation {
          0% {background-position: 0 0;}
          100% {background-position: -4096px 0;}
        }

        .parallax-background {
          position: fixed; 
          top: 0; 
          left: 0; 
          width: 100%; 
          height: 100%;
          will-change: transform;
          animation: background-image-animation 250s linear infinite;
          transform: translateX(0) scale(1.1);
          background: url({{themeAsset('../../background.jpg')}}) repeat-x center center;
          background-size: cover;
          filter: brightness(60%) blur(3px) grayscale(10%);;
        }
        
        @keyframes background-image-animation {
          0% {background-position: 0 0;}
          100% {background-position: -4096px 0;}
        }
</style>