<style>
    .layout{
  width: 60vw; 
  height: 80vh;
  padding: 20px;
  display: grid;
  grid-gap: 10px 10px;
  grid-template-rows: repeat(3, minmax(max-content, 1fr));
  grid-template-columns: repeat(6, minmax(max-content, 1fr));
  grid-template-areas: 
    "d d a a e e"  
    "d d b c e e"
    "d d b c e e";
}

.img-1{grid-area: a;}
.img-2{grid-area: b;}
.img-3{grid-area: c;}
.img-4{grid-area: d;}
.img-5{grid-area: e;}
</style>
<div class="layout">
  <div class="img img-1"></div>
  <div class="img img-2"></div>
  <div class="img img-3"></div>
  <div class="img img-4"></div>
  <div class="img img-5"></div>
</div>