<?php

// vendor/contao/newsletter-bundle/src/Resources/contao/languages/pt/tl_newsletter.xlf
$GLOBALS['TL_LANG']['tl_newsletter']['subject'][0] = 'Assunto';
$GLOBALS['TL_LANG']['tl_newsletter']['subject'][1] = 'Favor digitar o assunto da newsletter.';
$GLOBALS['TL_LANG']['tl_newsletter']['alias'][0] = 'Pseudônimo da Newsletter';
$GLOBALS['TL_LANG']['tl_newsletter']['alias'][1] = 'O Pseudônimo da Newsletter é uma referência única para a newsletter e esta pode ser referenciada pelo pseudônimo em vez do seu ID.';
$GLOBALS['TL_LANG']['tl_newsletter']['content'][0] = 'Conteúdo HTML';
$GLOBALS['TL_LANG']['tl_newsletter']['content'][1] = 'Favor inserir o conteúdo da newsletter. Use o curinga <em>##email##</em> para inserir o e-mail do destinatário. Gere um link de cancelamento de assinatura deste modo: <em>http://www.domain.com/unsubscribe-page.html?email=##email##</em>.';
$GLOBALS['TL_LANG']['tl_newsletter']['text'][0] = 'Texto do conteúdo';
$GLOBALS['TL_LANG']['tl_newsletter']['text'][1] = 'Por favor insira o texto do conteúdo da newsletter. Use o wildcard <em>##email##</em> para inserir o endereço de email do destinatário. Gerar links para desinscrição como <em>http://www.domain.com/unsubscribe-page.html?email=##email##</em>.';
$GLOBALS['TL_LANG']['tl_newsletter']['addFile'][0] = 'Adicionar anexos';
$GLOBALS['TL_LANG']['tl_newsletter']['addFile'][1] = 'Anexe um ou mais arquivos à newsletter.';
$GLOBALS['TL_LANG']['tl_newsletter']['files'][0] = 'Anexos';
$GLOBALS['TL_LANG']['tl_newsletter']['files'][1] = 'Por favor, selecione os arquivos que deseja anexar à newsletter.';
$GLOBALS['TL_LANG']['tl_newsletter']['template'][0] = 'Exemplo de e-mail';
$GLOBALS['TL_LANG']['tl_newsletter']['sendText'][0] = 'Enviar como texto';
$GLOBALS['TL_LANG']['tl_newsletter']['sendText'][1] = 'Se você selecionar esta opção, o e-mail será enviado como texto puro.';
$GLOBALS['TL_LANG']['tl_newsletter']['externalImages'][0] = 'Imagens externas';
$GLOBALS['TL_LANG']['tl_newsletter']['externalImages'][1] = 'Não embutir as imagens em HTML newsletters.';
$GLOBALS['TL_LANG']['tl_newsletter']['sender'][0] = 'Endereço de e-mail personalizado do remetente';
$GLOBALS['TL_LANG']['tl_newsletter']['sender'][1] = 'Aqui pode alterar o endereço de e-mail do remetetente padrão do canal para um da sua escolha.';
$GLOBALS['TL_LANG']['tl_newsletter']['senderName'][0] = 'Alterar nome do remetente';
$GLOBALS['TL_LANG']['tl_newsletter']['senderName'][1] = 'Aqui pode alterar o nome do remetente padrão do canal.';
$GLOBALS['TL_LANG']['tl_newsletter']['mailsPerCycle'][0] = 'Correios por ciclo';
$GLOBALS['TL_LANG']['tl_newsletter']['mailsPerCycle'][1] = 'Para evitar que o script exceda o limite de tempo, o envio é dividido em vários ciclos. Aqui você pode definir o número de emails por ciclo dependendo do tempo máximo de execução definido no seu php.ini.';
$GLOBALS['TL_LANG']['tl_newsletter']['timeout'][0] = 'Timeout em segundos';
$GLOBALS['TL_LANG']['tl_newsletter']['timeout'][1] = 'Alguns servidores limitam o número de e-mails que uma pessoa pode enviar por minuto. Aqui você pode definir o tempo entre cada ciclo em segundos para evitar atingir esse mesmo número.';
$GLOBALS['TL_LANG']['tl_newsletter']['start'][0] = 'Índice numérico';
$GLOBALS['TL_LANG']['tl_newsletter']['start'][1] = 'No caso do processo de envio ser interrompido, pode introduzir um intervalo numérico para continuar com um destinatário especifico. Pode verificar quantos e-mails foram enviados selecionado a categoria <code>NEWSLETTER_%s</code> no registo de actividade do sistema. Se existirem 120 ocorrências, introduza "120" para continuar com o destinatário número 121 (a contagem começa em 0).';
$GLOBALS['TL_LANG']['tl_newsletter']['sendPreviewTo'][0] = 'Enviar pré-visualização para';
$GLOBALS['TL_LANG']['tl_newsletter']['sendPreviewTo'][1] = 'Enviar uma pré-visualização da newsletter para este endereço de email.';
$GLOBALS['TL_LANG']['tl_newsletter']['title_legend'] = 'Título e assunto';
$GLOBALS['TL_LANG']['tl_newsletter']['html_legend'] = 'Conteúdo HTML';
$GLOBALS['TL_LANG']['tl_newsletter']['text_legend'] = 'Conteúdo em texto';
$GLOBALS['TL_LANG']['tl_newsletter']['attachment_legend'] = 'Anexos';
$GLOBALS['TL_LANG']['tl_newsletter']['template_legend'] = 'Configurações de modelos';
$GLOBALS['TL_LANG']['tl_newsletter']['sender_legend'] = 'Configurações do remetente';
$GLOBALS['TL_LANG']['tl_newsletter']['expert_legend'] = 'Configurações avançadas';
$GLOBALS['TL_LANG']['tl_newsletter']['sent'] = 'Enviado';
$GLOBALS['TL_LANG']['tl_newsletter']['sentOn'] = 'Enviado em %s';
$GLOBALS['TL_LANG']['tl_newsletter']['notSent'] = 'Ainda não enviado';
$GLOBALS['TL_LANG']['tl_newsletter']['mailingDate'] = 'Data de envio';
$GLOBALS['TL_LANG']['tl_newsletter']['confirm'] = 'A newsletter foi enviada para %s destinatários.';
$GLOBALS['TL_LANG']['tl_newsletter']['rejected'] = '%s endereço(s) de e-mail inválido foi/foram desactivados (veja log do sistema).';
$GLOBALS['TL_LANG']['tl_newsletter']['error'] = 'Não existem assinantes ativos neste canal.';
$GLOBALS['TL_LANG']['tl_newsletter']['from'] = 'De';
$GLOBALS['TL_LANG']['tl_newsletter']['attachments'] = 'Anexos';
$GLOBALS['TL_LANG']['tl_newsletter']['preview'] = 'Enviar pré-visualização';
$GLOBALS['TL_LANG']['tl_newsletter']['sendConfirm'] = 'Tem a certeza que pretende enviar a newsletter?';
$GLOBALS['TL_LANG']['tl_newsletter']['send'][0] = 'Enviar newsletter';
$GLOBALS['TL_LANG']['tl_newsletter']['send'][1] = 'Enviar newsletter com ID %s';
$GLOBALS['TL_LANG']['tl_newsletter']['new'][0] = 'Novo';
$GLOBALS['TL_LANG']['tl_newsletter']['new'][1] = 'Criar nova newsletter';
$GLOBALS['TL_LANG']['tl_newsletter']['show'] = 'Mostrar detalhes da newsletter com ID %s';
$GLOBALS['TL_LANG']['tl_newsletter']['edit'] = 'Editar newsletter com ID %s';
$GLOBALS['TL_LANG']['tl_newsletter']['copy'] = 'Duplicar newsletter com ID %s';
$GLOBALS['TL_LANG']['tl_newsletter']['cut'] = 'Mover Newsletter ID %s';
$GLOBALS['TL_LANG']['tl_newsletter']['delete'] = 'Remover newsletter com ID %s';
$GLOBALS['TL_LANG']['tl_newsletter']['pasteafter'][0] = 'Colar para este canal';