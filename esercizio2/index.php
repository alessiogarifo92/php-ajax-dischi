<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Esercizio usando include</title>

  </head>
  <body>

    <div id="app">

      <header>
        <img src="https://i.kinja-img.com/gawker-media/image/upload/c_scale,f_auto,fl_progressive,pg_1,q_80,w_800/htlaqq0ym182ra7qa8vs.jpg" alt="">
      </header>
      <div id="container">
        <div class="albums">

          <div class="alb-info" v-for = 'album in albums'>

            <img :src="album.poster" alt="">

            <p>{{album.title}}</p>
            <p>{{album.author}}</p>
            <p>{{album.year}}</p>

          </div>

        </div>
      </div>

    </div>

    <script type="text/javascript" src="script.js">

    </script>

  </body>
</html>
