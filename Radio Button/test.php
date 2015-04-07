<!DOCTYPE HTML>
<html>
<head>
<style>
	.css-checkbox {
							position:absolute;
							z-index:-1000;
							left:-1000px;
							overflow: hidden;
							clip: rect(0 0 0 0);
							height:1px;
							width:1px;
							margin:-1px;
							padding:0;
							border:0;
						}

						input[type=radio].css-checkbox + label.css-label {
							padding-left:35px;
							height:30px; 
							display:inline-block;
							line-height:30px;
							background-repeat:no-repeat;
							background-position: 0 0;
							font-size:30px;
							vertical-align:middle;
							cursor:pointer;

						}

						input[type=radio].css-checkbox:checked + label.css-label {
							background-position: 0 -30px;
						}
						label.css-label {
				background-image:url(img/radiogreen.png);
				-webkit-touch-callout: none;
				-webkit-user-select: none;
				-khtml-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
			}
</style>
</head>
<body>

<input type="radio" name="seat" id={{}} class="css-checkbox">
<label for={{}} class="css-label"></label>
</body>
</html>