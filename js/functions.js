function readURL(input,id) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#'+id)
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
function playersnum(pnum){
	switch(pnum){
	case 1: document.getElementById('pcam').style.height = "884px";
		break;
	case 2: document.pcam.style.height = "884px";
		break;
	case 3: document.getElementById('pcam').style.height = "884px";
		break;
	case 4: document.getElementById('pcam').style.height = "442px";
		break;
	case 5: document.getElementById('pcam').style.height = "442px";
		break;
	case 6: document.getElementById('pcam').style.height = "442px";
		break;
	default: document.getElementById('pcam').style.height = "0px";
	}
}