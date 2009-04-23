<?php  // $Id: chatinput.php,v 1.19.2.2 2008/06/25 02:10:37 dongsheng Exp $

    $nomoodlecookie = true;     // Session not needed!

    require('../../../config.php');
    require('../lib.php');

    $chat_sid = required_param('chat_sid', PARAM_ALPHANUM);

    if (!$chatuser = get_record('chat_users', 'sid', $chat_sid)) {
        error('Not logged in!');
    }

    //Get the user theme
    $USER = get_record('user', 'id', $chatuser->userid);

    //Setup course, lang and theme
    course_setup($chatuser->course);

    ob_start();
    ?>
    <script type="text/javascript">
    //<![CDATA[
    var waitFlag = false;
    function empty_field_and_submit() {
        if(waitFlag) return false;
        waitFlag = true;
        var input_chat_message = document.getElementById('input_chat_message');
        document.getElementById('sendForm').chat_message.value = input_chat_message.value;
        input_chat_message.value = '';
        input_chat_message.className = 'wait';
        document.getElementById('sendForm').submit();
        enableForm();
        return false;
    }

    function enableForm() {
        var input_chat_message = document.getElementById('input_chat_message');
        waitFlag = false;
        input_chat_message.className = '';
        input_chat_message.focus();
    }

    //]]>
    </script>
    <?php

    $meta = ob_get_clean();
    print_header('', '', '', 'input_chat_message', $meta, false);

?>
    <form action="../empty.php" method="post" target="empty" id="inputForm"
          onsubmit="return empty_field_and_submit()" style="margin:0">
        <input type="text" id="input_chat_message" name="chat_message" size="50" value="" />
        <?php helpbutton('chatting', get_string('helpchatting', 'chat'), 'chat', true, false); ?><br />
        <input type="checkbox" id="auto" size="50" value="" checked='true' /><?php echo get_string('autoscroll', 'chat');?>
    </form>

    <form action="insert.php" method="post" target="empty" id="sendForm">
        <input type="hidden" name="chat_sid" value="<?php echo $chat_sid ?>" />
        <input type="hidden" name="chat_message" />
    </form>
</div>
</div>
</body>
</html>