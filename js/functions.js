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
function Roll(d,Atr1,Atr2,Atr3,pos){
	var r = (Math.floor(Math.random() * d) + 1) + Atr1 + Atr2 + Atr3;
	var Res = document.getElementById("dado").innerHTML = r;
	return Res;
}