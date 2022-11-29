<style>
/* Basic Style */

html, body {
    background-color: #ffccdd;
    margin: 10px;
}

.wrapper{
	width: 100%;

}

h1{
	font-family: "Trebuchet MS", Helvetica, sans-serif;
	font-size: 38px;
	text-align: center;
	
}

.container > div {
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 2em;
    color: #ffeead;
}

.container > div > img {
    width: 100%;
    height: 100%;
    object-fit: cover;
		border: 1px solid black
}

/* Grid */
.container {
    display: grid;
    grid-gap: 5px;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    grid-auto-rows: 125px;
		grid-auto-flow: dense; /* Fill all spaces with fitted images */
}

.horizontal {
	grid-column: span 2;
}

.vertical {
	grid-row: span 2;
}

.big {
	grid-column: span 2;
	grid-row: span 2;
}

/* Media Queries */

@media screen and (min-width: 1024px){
	.wrapper{
		width: 960px;
		margin: 0 auto;
	}
}
</style>
<div class="wrapper">
	<h1>Image Grid</h1>
	<div class="container">
		<div class="horizontal"><img  src="https://picsum.photos/500/200" alt=""></div>
		<div class="vertical"><img  src="https://picsum.photos/200/350" alt=""></div>
		<div><img src="https://picsum.photos/200/200" alt=""></div>
		<div class="big"><img   src="https://picsum.photos/600/600" alt=""></div>
		<div class="vertical"><img  src="https://picsum.photos/250/400" alt=""></div>
		<div class="horizontal"><img  src="https://picsum.photos/400/150" alt=""></div>
		<div><img src="https://picsum.photos/200/220" alt=""></div>
		<div class="horizontal"><img  src="https://picsum.photos/450/200" alt=""></div>
		<div><img src="https://picsum.photos/220/250" alt=""></div>
		<div><img src="https://picsum.photos/250/200" alt=""></div>
	</div>
</div>
