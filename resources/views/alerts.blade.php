{{-- Message --}}
@if (Session::has('success'))
    <div id="alert" class="alert alert-success alert-dismissible" role="alert">
        <button id="fncallbtn" type="button" class="close" data-dismiss="alert">
            <i class="fa fa-times"> close</i>
        </button>
        <strong>Success !</strong> {{ session('success')}}
    </div>
    <script>
function FnCall(){
	//alert("Function call with click addEventListener.");

}
var mybtn = document.getElementById("fncallbtn");
mybtn.addEventListener("click",FnCall);
        </script>
@endif

@if (Session::has('error'))
    <div id="alert" class="alert alert-danger alert-dismissible" role="alert">
        <button id="fncallbtn" type="button" class="close" data-dismiss="alert">
            <i class="fa fa-times">close</i>
        </button>
        <strong>Error !</strong> {{ session('error') }}
    </div>
    <script>

function FnCall(){
	alert("Function call with click addEventListener.");
}
var mybtn = document.getElementById("fncallbtn");
mybtn.addEventListener("click",FnCall);
        </script>
@endif
