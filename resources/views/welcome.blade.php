<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>CKEditor 5 Sample</title>
		<link rel="stylesheet" href="public/css/app.js">
		<link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/42.0.2/ckeditor5.css">
	</head>
	<body>
		<div>
			<div class="main-container">
				<div class="editor-container editor-container_document-editor" id="editor-container">
					<div class="editor-container__menu-bar" id="editor-menu-bar"></div>
					<div class="editor-container__toolbar" id="editor-toolbar"></div>
					<div class="editor-container__editor-wrapper">
						<div class="editor-container__editor"><div id="editor"></div></div>
					</div>
				</div>
			</div>
		</div>
		<script type="importmap">
		{
			"imports": {
				"ckeditor5": "https://cdn.ckeditor.com/ckeditor5/42.0.2/ckeditor5.js",
				"ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/42.0.2/"
			}
		}
		</script>
		<script type="module" src="{{ URL::asset('assets/vendor/ckeditor5.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/mammoth/1.8.0/mammoth.browser.min.js"></script>
	</body>
</html>
