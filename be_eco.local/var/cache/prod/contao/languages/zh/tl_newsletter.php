<?php

// vendor/contao/newsletter-bundle/src/Resources/contao/languages/zh/tl_newsletter.xlf
$GLOBALS['TL_LANG']['tl_newsletter']['subject'][0] = '主题';
$GLOBALS['TL_LANG']['tl_newsletter']['subject'][1] = '请输入新闻通讯主题。';
$GLOBALS['TL_LANG']['tl_newsletter']['alias'][0] = '新闻通讯别名';
$GLOBALS['TL_LANG']['tl_newsletter']['alias'][1] = '新闻通讯别名是一个唯一值，可以用来代替数字ID被调用。';
$GLOBALS['TL_LANG']['tl_newsletter']['content'][0] = 'HTML内容';
$GLOBALS['TL_LANG']['tl_newsletter']['content'][1] = '您可以在这里输入新闻通讯的HTML内容，使用通配符<em>##email##</em>插入收件人电子邮件地址。';
$GLOBALS['TL_LANG']['tl_newsletter']['text'][0] = '文本内容';
$GLOBALS['TL_LANG']['tl_newsletter']['text'][1] = '您可以在这里输入新闻通讯的文本内容，使用通配符<em>##email##</em>插入收件人电子邮件地址。';
$GLOBALS['TL_LANG']['tl_newsletter']['addFile'][0] = '添加附件';
$GLOBALS['TL_LANG']['tl_newsletter']['addFile'][1] = '在新闻通讯中附加一个或多个文件。';
$GLOBALS['TL_LANG']['tl_newsletter']['files'][0] = '附件';
$GLOBALS['TL_LANG']['tl_newsletter']['files'][1] = '请在文件目录中选择文件作为附件。';
$GLOBALS['TL_LANG']['tl_newsletter']['template'][0] = '电子邮件模板';
$GLOBALS['TL_LANG']['tl_newsletter']['sendText'][0] = '以纯文本形式发送';
$GLOBALS['TL_LANG']['tl_newsletter']['sendText'][1] = '以纯文本形式发送新闻通讯电子邮件。';
$GLOBALS['TL_LANG']['tl_newsletter']['externalImages'][0] = '外部图片';
$GLOBALS['TL_LANG']['tl_newsletter']['externalImages'][1] = '不要在HTML新闻通讯页面中嵌入图片。';
$GLOBALS['TL_LANG']['tl_newsletter']['sender'][0] = '自定义发件人电子邮箱地址';
$GLOBALS['TL_LANG']['tl_newsletter']['sender'][1] = '您可以在这里覆盖该频道的默认发件人电子邮件模板.';
$GLOBALS['TL_LANG']['tl_newsletter']['senderName'][0] = '自定义发件人姓名';
$GLOBALS['TL_LANG']['tl_newsletter']['senderName'][1] = '您可以在这里覆盖该频道的默认发件人姓名.';
$GLOBALS['TL_LANG']['tl_newsletter']['mailsPerCycle'][0] = '每周期的邮件';
$GLOBALS['TL_LANG']['tl_newsletter']['mailsPerCycle'][1] = '发送进程划分为几个周期，以避免脚本超时。';
$GLOBALS['TL_LANG']['tl_newsletter']['timeout'][0] = '超时秒数';
$GLOBALS['TL_LANG']['tl_newsletter']['timeout'][1] = '您可以在这里修改每个周期间的等待时间，以控制每分钟的电子邮件数量。';
$GLOBALS['TL_LANG']['tl_newsletter']['start'][0] = '偏移量';
$GLOBALS['TL_LANG']['tl_newsletter']['start'][1] = '如果发送进程被打断，可以输入一个数字偏移量以对特定收件人继续发送。在系统日志中通过选择类别  <code>NEWSLETTER_%s</code> 可以检查多少邮件已发送。如果是120条记录，输入 "120" 可以从第121位收件人继续发送(从0开始计数).';
$GLOBALS['TL_LANG']['tl_newsletter']['sendPreviewTo'][0] = '发送预览到';
$GLOBALS['TL_LANG']['tl_newsletter']['sendPreviewTo'][1] = '发送新闻通讯预览到这个电子邮件地址。';
$GLOBALS['TL_LANG']['tl_newsletter']['title_legend'] = '标题和主题';
$GLOBALS['TL_LANG']['tl_newsletter']['html_legend'] = 'HTML内容';
$GLOBALS['TL_LANG']['tl_newsletter']['text_legend'] = '文本内容';
$GLOBALS['TL_LANG']['tl_newsletter']['attachment_legend'] = '附件';
$GLOBALS['TL_LANG']['tl_newsletter']['template_legend'] = '模板设设置';
$GLOBALS['TL_LANG']['tl_newsletter']['sender_legend'] = '发送者设置';
$GLOBALS['TL_LANG']['tl_newsletter']['expert_legend'] = '专家设定';
$GLOBALS['TL_LANG']['tl_newsletter']['sent'] = '已发送';
$GLOBALS['TL_LANG']['tl_newsletter']['sentOn'] = '已发送 %s';
$GLOBALS['TL_LANG']['tl_newsletter']['notSent'] = '还没有发送';
$GLOBALS['TL_LANG']['tl_newsletter']['mailingDate'] = '发送邮件时间';
$GLOBALS['TL_LANG']['tl_newsletter']['confirm'] = '新闻通讯已发送到%s位收件人。';
$GLOBALS['TL_LANG']['tl_newsletter']['rejected'] = '%s条无效的电子邮件地址已禁用(请查看系统日志)。';
$GLOBALS['TL_LANG']['tl_newsletter']['error'] = '这个频道中没有激活的订阅者。';
$GLOBALS['TL_LANG']['tl_newsletter']['from'] = '来自';
$GLOBALS['TL_LANG']['tl_newsletter']['attachments'] = '附件';
$GLOBALS['TL_LANG']['tl_newsletter']['preview'] = '发送预览';
$GLOBALS['TL_LANG']['tl_newsletter']['sendConfirm'] = '您确实要发送新闻通讯吗？';
$GLOBALS['TL_LANG']['tl_newsletter']['send'][0] = '发送新闻通讯';
$GLOBALS['TL_LANG']['tl_newsletter']['send'][1] = '发送ID为%s的新闻通讯';
$GLOBALS['TL_LANG']['tl_newsletter']['new'][0] = '新建';
$GLOBALS['TL_LANG']['tl_newsletter']['new'][1] = '创建一个新的新闻通讯';
$GLOBALS['TL_LANG']['tl_newsletter']['show'] = '显示ID为%s的新闻通讯详情';
$GLOBALS['TL_LANG']['tl_newsletter']['edit'] = '编辑ID为%s的新闻通讯';
$GLOBALS['TL_LANG']['tl_newsletter']['copy'] = '复制ID为%s的新闻通讯';
$GLOBALS['TL_LANG']['tl_newsletter']['cut'] = '移动ID为%s的新闻通讯';
$GLOBALS['TL_LANG']['tl_newsletter']['delete'] = '删除ID为%s的新闻通讯';
$GLOBALS['TL_LANG']['tl_newsletter']['pasteafter'][0] = '粘帖到这个频道';