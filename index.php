<div id="content">

<div>
	<h2>Uploadstar</h2>

<div id="app">
	<div>

<!-- 
		<form class="form" id="myForm">
 		  <label>Upload file:</label>
		  <input type="file" id="inpFile" />
		  <br />
		  <button type="submit">UPLOAD ALREADY</button>
		</form>
-->

		<form id="myForm" method="post" enctype="multipart/form-data" action="./">
			<input id="inpFile" type="file" name="files[]" multiple>
			<button type="submit" value="Upload File" name="submit">UPLOAD</button>
		</form>

		<div class="filelist"></div>
		<div id="result">...</div>

	</div>
</div>

</div>

<script type="text/javascript">
			
	// 	const myForm = document.getElementById("myForm");
	// 	const inpFile = document.getElementById("inpFile");
	// 	const result = document.getElementById("result");

	// 	result.innerHTML = "OH the vast emptiness...";

	// 	myForm.addEventListener("submit", e => {
	// 		e.preventDefault();

	// 		const endpoint = "/images/";
	// 		const formData = new FormData();

	// 		formData.append("inpFile", inpFile.files[0]);

	// 		fetch(endpoint, {
	// 			method: "post",
	// 			body: formData,
	// 		}).then ((response) => {
	// 			console.log(response);
	// 			if (response.status === 200) {result.innerHTML = "Dateien wurden geladen";}
	// 		}).catch(console.error);
	// 	});
	// }

	const url = "_upload.php";
	const myForm = document.getElementById("myForm");

	// Ein EventListener wartet auf das submit
	myForm.addEventListener ("submit", function (evt) {
		evt.preventDefault ();
			const inpFile = document.getElementById("inpFile");
			const files = inpFile.files;
	    const formData = new FormData();
	    
		for (let i = 0; i < files.length; i++) {
			let file = files[i];
			formData.append('files[]', file)
		}
		
		fetch (url, {
			method: "POST",
			body: formData
		}).then ((response) => {
			console.log (response);
			if (response.status === 200) {
				result.innerHTML = "success!!";
			}
		});
	});

</script>

</div>
