<?php
$this->start('name_link');
echo ' >> '.'メールマスタ検索';
$this->end();

$this->start('name_page');
echo 'メールマスタ検索';
$this->end();

echo $this->Html->css('/backend/css/error_messages', null, array('inline' => false));
?>
<div class="content">
        <div class="contentMargin2">
            <button type="button" class="btn btn-default" onclick="location.href ='/admin/template_mail/edit' "><?php echo __d('backend', 'new'); ?></button>
        </div>

	<?php
		echo $this->Form->create('TemplateMail', array('url' => '/admin/template_mail/lists/', 'type' => 'get'));
	?>
	<div class="contentBorder contentMargin clearfix">
		<!-- begin Table -->
		<table id="very-wide-element1" class="form-search" width="100%" >
			<tr>
				<td><?php echo __d('backend', 'template_mail_type'); ?></td>
				<td>
					<?php 
                        echo $this->Form->input('name', array(
							'type'     => 'text',
							'label'    => false,
							'required' => false,
							'class'    => 'middle-length-input'
						));
					?>
				</td>
				<td><?php echo __d('backend', 'subject'); ?></td>
				<td width="30%">
					 <?php  echo $this->Form->input('subject', array(
							'type'     => 'text',
							'label'    => false,
							'required' => false,
							'class'    => 'middle-length-input'
						));
					   ?>
				</td>
			</tr>
			<tr>
				<td><?php echo __d('backend', 'body'); ?></td>
					<td>
						<?php  echo $this->Form->input('body', array(
								'type'     => 'text',
								'label'    => false,
								'required' => false,
								'class'    => 'middle-length-input'
							));
					   ?>
					</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td colspan="4"><br />
					<div class="clearfix" align="center" style="margin-bottom: 10px;">
						<input type="submit"  class="btn btn-default" value="　<?php echo __d('backend', 'search'); ?>　">
					</div>
				</td>
			</tr>
		</table>
		<!-- end Table -->

	</div>
	 <?php echo $this->Form->end(); ?>
    <?php
//        echo $this->Html->css('/backend/css/error_messages', null, array('inline' => false));
       // echo $this->Session->flash('no_permission');
    ?>
    <?php if(isset($template_mail_list) && count($template_mail_list) < 1): ?>
        <div class="noData">
        <p><?php echo Configure::read(BACK_APP_000.'.NoData'); ?></p>
        </div>
    <?php endif; ?>
    <?php if(isset($template_mail_list) && count($template_mail_list) > 0): ?>
    <div class="list-pager-cus">
            <span >全 <?php echo (!empty($totalRecords) ? h($totalRecords) : 0); ?> 件中 <?php echo (!empty($from) ? h($from) : 0); ?> 件 ～ <?php echo (!empty($to) ? h($to) : 0); ?> 件を表示</span>
            <div id="paging" class="list-pages"><?php echo $this->Paging->listpage($totalPage, $pageNum);   ?></div>
    </div>
	<div class="contentBorder contentListMargin clearfix">
		<!-- begin Table -->
		<table class="altrowstable" id="alternatecolor" >
			<thead>
			<tr>
				<th style="border:none !important"><?php echo __d('backend', 'template_mail_type'); ?></th>
				<th style="border:none !important"><?php echo __d('backend', 'subject'); ?></th>
				<th style="border:none !important"><?php echo __d('backend', 'body'); ?></th>
				<th style="border:none !important"><?php echo __d('backend', 'edit'); ?></th>
				<th style="border:none !important"><?php echo __d('backend', 'delete'); ?></th>
			</tr>
			</thead>
		<tbody>
		<?php
		foreach ($template_mail_list as $val) {
            $template_mail_str_del = $val['TemplateMail']['id']."_".$val['TemplateMail']['name'];

		?>
		<tr class="addhover">
			<td class="list-first-collumn"><?php echo h($val['TemplateMail']['name'])?></td>
			<td><?php echo h($val['TemplateMail']['subject'])?></td>
			<td><?php echo substr( h($val['TemplateMail']['body']), 0, 150 )?></td>
			<td class="list-last-collumn"><a href="/admin/template_mail/edit/<?php  echo h($val['TemplateMail']['id'])?>"><img src="/backend/img/common/icon/edit.png" alt="Edit"/></a></td>
            <td class="list-last-collumn"><a onclick="delete_mail(<?php echo  "'$template_mail_str_del'";?>)"><img id="del_mail"  src="/backend/img/common/icon/delete.gif"  alt="delete" /></a></td>

		</tr>
		<?php

		}
		?>

		</tbody>
		</table>
		<!-- end Table -->
	</div>
    <div class="list-pager-cus no_margin_top">
            <span >全 <?php echo (!empty($totalRecords) ? h($totalRecords) : 0); ?> 件中 <?php echo (!empty($from) ? h($from) : 0); ?> 件 ～ <?php echo (!empty($to) ? h($to) : 0); ?> 件を表示</span>
            <div id="paging" class="list-pages"><?php echo $this->Paging->listpage($totalPage, $pageNum);   ?></div>
    </div>
    <?php endif; ?>
<script type="text/javascript">
 function delete_mail(data) {
    var data_arr = data.split('_');
    var r = confirm(data_arr[1]+" を削除します。\nよろしいですか？");
    if(r === true)
    {
        var href="/admin/template_mail/delete/"+data_arr[0];
        window.location.href = href;
        return href;
    }
    else{
        return false;
    }
  }
</script>
<script type="text/javascript">
    $(function() {
        $('#btnSubmit').click(function() {
            $('#PageNo').val(1);
        });
        
        // paging setting
        var curr_page = "<?php echo isset($pageNum)?$pageNum:0; ?>";
        var totalpage = "<?php echo isset($totalPage)?$totalPage:0; ?>";
        $('#paging a').each(function() {
            $(this).click(function() {
                var val = $(this).html();
                if (val == '前へ') {
                    val = parseInt(curr_page,10) - 1;
                } else if (val == '次へ') {
                    val = parseInt(curr_page,10) + 1;
                } else if (val == '最初') {
                    val = 1;
                } else if (val == '最終') {
                    val = totalpage;
                }
                $("#PageNo").val(val);
                $("#TemplateMailListsForm").append('<input type="hidden" name="PageNo" id="PageNo" value="' + val + '">');
                $('#TemplateMailListsForm').submit();
            });
        });
    });
</script>
