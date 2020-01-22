<?php require 'header.php'; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha256-9mbkOfVho3ZPXfM7W8sV2SndrGDuh7wuyLjtsWeTI1Q=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/card.min.css" integrity="sha256-96nTilMyTko2+vRSHcarm0QU20pzAvZy4sZPoPh1h5A=" crossorigin="anonymous" />

<style>
body {
	font-family: inherit;
    font-size: inherit;
}

.ui.cards>.card>.image>img {
	width:100%;
	height:350px;
	cursor:pointer;
}

@media only screen and (max-width: 767px) {
	.blogContainer {
		width:100% !important;
	}
}
</style>

<div class="blogContainer" style="width:80%;margin:auto;margin-top:100px;margin-bottom:100px;">
	<h1>Blogs</h1>
	<hr>
	<div class="ui four stackable cards">
	  <div class="card">
		  <div class="image" onclick="openInNewTab('/files/blog/20200110 SECURE Act Blog.pdf');">
			<img src="/images/blog/image9.jpg">
		  </div>
		  <div class="content">
			<a class="header" href="/files/blog/20200110 SECURE Act Blog.pdf" target="_blank">SECURE Act: What You Need to Know</a>
		  </div>
		 </a>
	  </div>
	  <div class="card">
		  <div class="image" onclick="openInNewTab('/files/blog/Fiduciary.pdf');">
			<img src="/images/blog/image1.jpg">
		  </div>
		  <div class="content">
			<a class="header" href="/files/blog/Fiduciary.pdf" target="_blank">What 401(k) Plan Sponsors Need to Know</a>
		  </div>
		 </a>
	  </div>
	  <div class="card">
		  <div class="image" onclick="openInNewTab('https://financeinsights.net/N4ZTvrDHOmQrH5xm5HvMjd');">
			<img src="/images/blog/image7.jpg">
		  </div>
		  <div class="content">
			<a class="header" href="https://financeinsights.net/N4ZTvrDHOmQrH5xm5HvMjd" target="_blank">How to Live a Rich Life</a>
		  </div>
		 </a>
	  </div>
	  <div class="card">
		  <div class="image" onclick="openInNewTab('https://financeinsights.net/ZBPfxQginPZ5Tvmq3Cd8vM');">
			<img src="/images/blog/image8.png">
		  </div>
		  <div class="content">
			<a class="header" href="https://financeinsights.net/ZBPfxQginPZ5Tvmq3Cd8vM" target="_blank">Make the Greatest Impact with Charitable Giving</a>
		  </div>
		 </a>
	  </div>
	  <div class="card">
		  <div class="image" onclick="openInNewTab('https://financeinsights.net/N4ZTvjACO38EC5VDZFvKZm');">
			<img src="/images/blog/image2.png">
		  </div>
		  <div class="content">
			<a class="header" href="https://financeinsights.net/N4ZTvjACO38EC5VDZFvKZm" target="_blank">Finish Strong. Live Your Best Life in 2020</a>
		  </div>
	  </div>
	  <div class="card">
		  <div class="image" onclick="openInNewTab('https://s3.amazonaws.com/snappykraken/vessels/LVqoRpZJBr/pdf/KJmlY010PE.pdf');">
			<img src="/images/blog/image3.png">
		  </div>
		  <div class="content">
			<a class="header" href="https://s3.amazonaws.com/snappykraken/vessels/LVqoRpZJBr/pdf/KJmlY010PE.pdf" target="_blank">6 "Hidden" Tax Saving Opportunities</a>
		  </div>
	  </div>
	  <div class="card">
		  <div class="image" onclick="openInNewTab('https://financeinsights.net/6B6fM5DC06ODhOGZ1CnY1n');">
			<img src="/images/blog/image4.png">
		  </div>
		  <div class="content">
			<a class="header" href="https://financeinsights.net/6B6fM5DC06ODhOGZ1CnY1n" target="_blank">How to Financially Survive the Holidays</a>
		  </div>
	  </div>
	  <div class="card">
		  <div class="image" onclick="openInNewTab('/files/blog/Hindsight Is 2020 Foresight Isnt.pdf');">
			<img src="/images/blog/image5.PNG">
		  </div>
		  <div class="content">
			<a class="header" href="/files/blog/Hindsight Is 2020 Foresight Isnt.pdf" target="_blank">Hindsight Is 20/20. Foresight Isn't</a>
		  </div>
	  </div>
	  <div class="card">
		  <div class="image" onclick="openInNewTab('/files/blog/10 Ways Investments and Markets Have Evolved.pdf');">
			<img src="/images/blog/image6.PNG">
		  </div>
		  <div class="content">
			<a class="header" href="/files/blog/10 Ways Investments and Markets Have Evolved.pdf" target="_blank">10 Ways Investments and Markets Have Evolved</a>
		  </div>
	  </div>
	</div>
</div>

<?php require 'include/javascript/master.php' ?>
<?php require 'footer.php'; ?>

  <script>
  
	function openInNewTab(url) {
	  var win = window.open(url, '_blank');
	  win.focus();
	}
  </script>

</body>

</html>