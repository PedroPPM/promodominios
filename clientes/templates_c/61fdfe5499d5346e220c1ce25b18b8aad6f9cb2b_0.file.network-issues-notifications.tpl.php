<?php
/* Smarty version 3.1.48, created on 2024-07-19 04:18:57
  from '/www/wwwroot/promodominios.com/clientes/templates/twenty-one/includes/network-issues-notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_669978b146c9d2_69062816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61fdfe5499d5346e220c1ce25b18b8aad6f9cb2b' => 
    array (
      0 => '/www/wwwroot/promodominios.com/clientes/templates/twenty-one/includes/network-issues-notifications.tpl',
      1 => 1721202308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_669978b146c9d2_69062816 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['openNetworkIssueCounts']->value['open'] > 0) {?>
    <div class="alert alert-warning network-issue-alert m-0">
        <div class="container">
            <i class="fas fa-exclamation-triangle fa-fw"></i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'networkIssuesAware'),$_smarty_tpl ) );?>

            <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/serverstatus.php" class="alert-link float-lg-right">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'learnmore'),$_smarty_tpl ) );?>

                <i class="far fa-arrow-right"></i>
            </a>
        </div>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['openNetworkIssueCounts']->value['scheduled'] > 0) {?>
    <div class="alert alert-info network-issue-alert m-0">
        <div class="container">
            <i class="fas fa-info-circle fa-fw"></i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'networkIssuesScheduled'),$_smarty_tpl ) );?>

            <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/serverstatus.php" class="alert-link float-lg-right">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'learnmore'),$_smarty_tpl ) );?>

                <i class="far fa-arrow-right"></i>
            </a>
        </div>
    </div>
<?php }
}
}
