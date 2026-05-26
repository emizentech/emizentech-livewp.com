jQuery(document).ready(function($){
    $('#llms-txt-test-openai').on('click', function(e){
        e.preventDefault();
        var key = $('#llms_txt_openai_key').val();
        var $result = $('#llms-txt-test-openai-result');
        $result.text('Testing...').css('color', '#555');

        $.post(LLMSTxtBuilder.ajax_url, {
            action: 'llms_txt_test_openai',
            nonce: LLMSTxtBuilder.nonce,
            key: key
        }, function(response){
            if(response.success) {
                $result.text('Valid!').css('color', 'green');
            } else {
                $result.text('Invalid Key').css('color', 'red');
            }
        });
    });
});


jQuery(document).ready(function($){

    $('#llms-txt-manual-generate').on('click', function() {
        var $btn = $(this);
        var $result = $('#llms-txt-manual-generate-result');
        $btn.prop('disabled', true);
        $result.text('Generating...').css('color', '#555');

        $.post(LLMSTxtBuilder.ajax_url, {
            action: 'llms_txt_manual_generate',
            nonce: LLMSTxtBuilder.nonce
        }, function(response){
            $btn.prop('disabled', false);
            if(response.success) {
                $result.text('llms.txt generated!').css('color', 'green');
            } else {
                $result.text('Generation failed: ' + (response.data && response.data.message ? response.data.message : '')).css('color', 'red');
            }
        });
    });
});

