
<form action="">
    <row class="row form-group">
        <div class="col-md-3">
            <input type="text" id="estado" name="estado" class="form-control">
        </div>
        <div class="col-md-4">
            <label for="">Cidade</label>
            <select name="" id="" class="form-control">
                <option value="">Selecione</option>
                
            </select>
        </div>
    </row>
    <button class="btn btn-primary" id="captura">Clique</button>
    <div></div>
</form>
<script>

$("#estado").change(function(){
    $.ajax({
        url:"Vai",
        method:"POST",
        dataType: "json",
        data:{estado:$("input#estado").val()},
        success:function(resposta)
        {
            
            console.log(JSON.stringify({"nome"}));
        }
    })
});
</script>