<?php
use app\assets\AppAsset;
use yii\widgets\ActiveForm;
$bundel=AppAsset::register($this);
?>
<style>
    @import url(http://fonts.googleapis.com/css?family=Lato:100,300,400,700);


    body {
        background: #DDD;
        font-size: 15px;
    }
    #wrap {
        margin: 50px 100px;
        display: inline-block;
        position: relative;
        height: 60px;
        float: right;
        padding: 0;
        position: relative;
    }
    input[type=text] {
        width: 350px;
        height:50px;

        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        border:none;


        background-position: 10px 10px;
        background-repeat: no-repeat;
        padding: 12px 20px 12px 40px;
        -webkit-transition: width 0.4s ease-in-out;
        transition: width 0.4s ease-in-out;
        display: inline-block;
        width: 700px;
        z-index: 1;
        border-bottom: 1px solid #BBB;
        cursor: text;



    }
    input[type="submit"] {
        height: 50px;
        width: 63px;
        display: inline-block;
        color:red;
        float: right;
        background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAADNQTFRFU1NT9fX1lJSUXl5e1dXVfn5+c3Nz6urqv7+/tLS0iYmJqampn5+fysrK39/faWlp////Vi4ZywAAABF0Uk5T/////////////////////wAlrZliAAABLklEQVR42rSWWRbDIAhFHeOUtN3/ags1zaA4cHrKZ8JFRHwoXkwTvwGP1Qo0bYObAPwiLmbNAHBWFBZlD9j0JxflDViIObNHG/Do8PRHTJk0TezAhv7qloK0JJEBh+F8+U/hopIELOWfiZUCDOZD1RADOQKA75oq4cvVkcT+OdHnqqpQCITWAjnWVgGQUWz12lJuGwGoaWgBKzRVBcCypgUkOAoWgBX/L0CmxN40u6xwcIJ1cOzWYDffp3axsQOyvdkXiH9FKRFwPRHYZUaXMgPLeiW7QhbDRciyLXJaKheCuLbiVoqx1DVRyH26yb0hsuoOFEPsoz+BVE0MRlZNjGZcRQyHYkmMp2hBTIzdkzCTc/pLqOnBrk7/yZdAOq/q5NPBH1f7x7fGP4C3AAMAQrhzX9zhcGsAAAAASUVORK5CYII=) center center no-repeat;
        text-indent: -10000px;
        border: none;
        position: absolute;
        top: 0;
        right: 0;
        z-index: 2;
        cursor: pointer;
        opacity: 0.4;
        cursor: pointer;
        transition: opacity .4s ease;
    }

    input[type="submit"]:hover {
        opacity: 0.8;
    }
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<div id="wrap">
    <?php $form=ActiveForm::begin([
        'id'=>'formSearch',
        'options' => ['autocomplete' => 'on'],
    ])?>
    <?=$form->field($teacher,'ho_ten')->textInput(['id'=>"search",'type'=>"text", 'placeholder'=>"Full name"])->label(false)?>
    <input id="search_submit" value="Rechercher" type="submit">
    <?php ActiveForm::end()?>
</div>

<script src="<?=$bundel->baseUrl?>/js/jquery-3.1.0.js">
</script>
<script>
    $(document).ready(function () {
        $('#search').keyup(function () {
            $('table').remove();
            $.ajax(
                {
                    url: '<?php echo \yii\helpers\Url::toRoute(['ajax'])?>',
                    type:'POST',
                    cache: false,
                    data:$('#formSearch').serializeArray(),
                    success:function (result) {
                        if(result!='error') {
                            if(result!='none')
                                $('#wrap').append(result);
                        }
                        else
                            alert('loi');
                    }
                }
            );
        })
    })

</script>
