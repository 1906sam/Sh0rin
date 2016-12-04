<script>

    function submitFormData()
    {
        var element = document.querySelector("form");
        element.addEventListener("submit",function (event) {
            event.preventDefault();
        });
        
        var longUrl = document.getElementById('longUrlId').value;
        var customUrl = document.getElementById('customUrlID').value;

        if(customUrl != "" && customUrl != null)
        {
            $.ajax({
                url: 'http://' + '<?php echo $_SERVER['SERVER_NAME'] ?>/' + 'guestUsers/add',
                type: 'POST',
                data: 'longUrl=' + longUrl+"&customUrl="+customUrl,
                success: function (data) {
                    if(data == "error")
                        alert("Url shortening failed. Please try again!");
                    else
                        document.getElementById('labelData').innerHTML = "Shortened Url is: http://sh0r.in/"+data;
                },
                dataType: 'text'
            });
        }
        else
        {
            $.ajax({
                url: 'http://' + '<?php echo $_SERVER['SERVER_NAME'] ?>/' + 'guestUsers/add',
                type: 'POST',
                data: 'longUrl=' + longUrl,
                success: function (data) {
                    if(data == "error")
                        alert("Url shortening failed. Please try again!");
                    else
                        document.getElementById('labelData').innerHTML = "Shortened Url is: http://sh0r.in/"+data;
                },
                dataType: 'text'
            });
        }
    }

</script>
<div class="guestUsers form large-9 medium-8 columns content">
    <?= $this->Form->create($guestUser) ?>
    <fieldset>
        <legend><?= __('Add Guest User') ?></legend>
        <?php
            //echo $this->Form->input('ip_address',['value' => $_SERVER['REMOTE_ADDR'],'type' => 'hidden']);
            echo $this->Form->input('long_url',['id'=>'longUrlId']);
            echo $this->Form->input('custom_url',['id'=>'customUrlID']);
           // echo $this->Form->input('created_date',['value' => date("Y-m-d H:i:s"),'type' => 'hidden']);
//            echo $this->Form->input('modified_date');
        ?>
    </fieldset>
    <?= $this->Form->button('Submit',['type' => 'submit','onclick' => 'submitFormData();']) ?>
    <?= $this->Form->end() ?>
    <label id="labelData">Shortened Url is: http://sh0r.in/</label>
</div>
