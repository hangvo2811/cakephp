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
        <button type="button" class="btn btn-default" onclick="location.href ='/user/edit' ">New</button>
    </div>
</div>

        
<div id="paging" class="list-pages" style="padding-top: 15px;">
	<?php
	  echo $this->element('paging');
	?>
</div>

<div class="contentBorder contentListMargin clearfix">
	<!--begin Table--> 
    <br><table class="altrowstable" id="alternatecolor" style="background-color: #fff;">
		<thead>
			<tr>
				<th style="border:none !important">
					User Group ID
				</th>
				<th style="border:none !important">
					Username
				</th>
				<th style="border:none !important">
					Firstname
				</th>
				<th style="border:none !important">
					Lastname
				</th>
				<th style="border:none !important">
					Email
				</th>
			</tr>
		</thead>
		<tbody>
			<tr><td colspan="13" class="list-underline"></td></tr>
			<?php
			foreach($list_user as $user):
				?>				
                <tr class="addhover">
                    <td><?php echo h($user['User']['user_group_id']); ?></td>
                    <td><?php echo $user['User']['username']; ?></td>
                    <td><?php echo $user['User']['first_name']; ?></td>
                    <td><?php echo $user['User']['last_name']; ?></td>
                    <td><?php echo $user['User']['mail']; ?></td>
                </tr>				
				<?php
			endforeach;
			?>
		</tbody>
	</table>
	<!--end Table--> 
</div>

