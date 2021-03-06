<?php
return array (
// Menu Text
'Manage Flows'=>'Gerir os fluxos',
'Create Flow'=>'Criar um fluxo de',
'X2Flow Automation Rules'=>'Regras de automação X2Flow',

// Flow Editor Text
'changed'=>'mudou',
'before'=>'antes',
'after'=>'depois',
'Compare Attribute'=>'Compare Atributo',
'Current User'=>'Usuário atual',
'Current Month'=>'Mês atual',
'Day of Week'=>'Dia da Semana',
'Day of Month'=>'Dia do mês',
'Time of Day'=>'Hora do Dia',
'Current Time'=>'Hora',
'User Logged In'=>'Usuário logado',
'On List'=>'Na lista',
'Add Condition'=>'Adicionar condição',
'Add Attribute'=>'Adicionar atributo',

// Trigger Types
'Select a trigger'=>'Selecione um gatilho',
'Action Overdue'=>'Ação Vencidos',
'Action Marked Incomplete'=>'Ação marcada como incompleta',
'Campaign Email Clicked'=>'Campanha de Email Clicado',
'Campaign Email Opened'=>'Campanha de e-mail aberto',
'Unsubscribed from Campaign'=>'Sobras de campanha',
'Campaign Web Activity'=>'Campanha Web Activity',
'Newsletter Email Clicked'=>'Newsletter Email Clicado',
'Newsletter Email Opened'=>'Newsletter Email Aberto',
'Unsubscribed from Newsletter'=>'Retirado do Boletim',
'Tag Added'=>'Tag adicionada',
'Tag Removed'=>'Tag Removido',
'Record Updated'=>'Registro atualizado',
'Record Viewed'=>'Registro Visto',
'User Signed In'=>'Usuário conectado',
'User Signed Out'=>'Usuário Assinado Fora',
'Contact Web Activity'=>'Contato Atividade Web',

// Trigger Text
'Triggers when an action becomes overdue. Cronjob must be configured to trigger reliably.'=>'Desencadeia quando uma ação se torna atraso. Cronjob deve ser configurado para acionar de forma confiável.',
'Time Overdue (s)'=>'Tempo em atraso (s)',
'Triggers when a contact clicks a tracking link in a campaign email.'=>'Dispara quando um contato clica em um link em um e-mail de rastreamento de campanha.',
'Triggers when a contact opens or clicks on a tracking link in a campaign email.'=>'Dispara quando um contato abre ou clica em um link em um e-mail de rastreamento de campanha.',
'Triggers when a contact clicks the "unsubscribe" link in a campaign email.'=>'Dispara quando um contato clica no link "unsubscribe" em um e-mail de campanha.',
'Triggered when a contact visits your webpage by clicking a link in a campaign email.'=>'Acionado quando um contacto visita sua página clicando em um link em um e-mail de campanha.',
'Triggers when a contact clicks a tracking link in a newsletter email (no contact record available).'=>'Dispara quando um contato clica em um link de rastreamento em um e-mail newsletter (sem registro de contato disponível).',
'Triggers when a contact opens or clicks on a tracking link in a newsletter email (no contact record available).'=>'Dispara quando um contato abre ou clica em um link de rastreamento em um e-mail newsletter (sem registro de contato disponível).',
'Triggers when a contact clicks the "unsubscribe" link in a newsletter email (no contact record available).'=>'Dispara quando um contato clica no link "unsubscribe" em um e-mail newsletter (sem registro de contato disponível).',
'Triggered when a contact visits a webpage (no contact record available).'=>'Acionado quando um contacto visita uma página web (sem registro de contato disponível).',
'Triggers when a new record of the specified type is created.'=>'Dispara quando um novo registro do tipo especificado é criado.',
'Triggers when a record of specified type is deleted.'=>'Dispara quando um registro do tipo especificado é excluído.',
'Triggered by adding one of these tags to a record.'=>'Provocado pela adição de uma dessas marcas a um registro.',
'Triggered when some updates a record of the the specified type.'=>'Acionado quando algumas atualizações um registro do tipo especificado.',
'Triggered when a user signs in to X2Engine.'=>'Acionado quando um usuário assina em que X2Engine.',
'Triggered when a user signs out of X2Engine.'=>'Acionado quando um usuário assina de X2Engine.',
'Triggered when a contact visits a webpage'=>'Acionado quando um contacto visita uma página web',
'Triggers when a new contact fills out your web lead capture form.'=>'Dispara quando um novo contato preenche o formulário de captura de chumbo web.',

// Action Types
'Flow Actions'=>'Ações de fluxo',
'Remote API Call'=>'Chamada Remote API',
'Post to Activity Feed'=>'Postar no Feed de Atividade',
'Create Popup Notification'=>'Criar Notificação Popup',
'Create Record'=>'Criar Registro',
'Create Action for Record'=>'Criar Acção para Registro',
'Delete Record'=>'Excluir registro',
'Email Record'=>'Email Grave',
'Email Contact'=>'Enviar e-mail de contato',
'Add to List'=>'Adicionar à lista',
'Remove from List'=>'Remover da lista',
'Reassign Record'=>'Redesignar Registro',
'Add or Remove Tags'=>'Adicionar ou Remover Marcas',
'Update Record'=>'Atualizar registro',
'Wait'=>'Espere',

// Action Text
'Conditional Switch'=>'Mudar condicional',
'Creates a fork in the automation flow based on your conditions.'=>'Cria uma bifurcação no fluxo de automação com base em suas condições.',
'Call a remote API by requesting the specified URL. You can specify the request type and any variables to be passed with the request. To improve performance, he request will be put into a job queue unless you need it to execute immediately.'=>'Chame um API remoto, solicitando a URL especificada. Você pode especificar o tipo de pedido e todas as variáveis ​​a serem passados ​​com o pedido. Para melhorar o desempenho, ele solicitará será colocado em uma fila de emprego, a menos que você precisa para executar imediatamente.',
'GET'=>'GET',
'POST'=>'POST',
'PUT'=>'PUT',
'DELETE'=>'APAGAR',
'Creates an activity feed event.'=>'Cria um evento feed de atividade.',
'Owner of Record'=>'Dono da Record',
'{Owner of Record}'=>'{Owner of Record}',
'Send a template or custom email to the specified address.'=>'Enviar um modelo ou e-mail personalizado para o endereço especificado.',
'Creates a new action associated with the record that triggered this flow.'=>'Cria uma nova ação associada com o registro que desencadeou este fluxo.',
'Permanently delete this record.'=>'Permanentemente excluir este registro.',
'Send a template or custom email to this record\'s email address. Uses the assignee\'s email unless specified.'=>'Enviar um template ou e-mail personalizado para este registro  &#39;s endereço de email. Usa-mail cessionário  &#39;s, a menos que especificado.',
'Add this record to a static list.'=>'Adicionar este registro a uma lista estática.',
'Remove this record from a static list.'=>'Remover este registro de uma lista estática.',
'Assign the record to a user or group, or automatically using lead routing.'=>'Atribuir o registro de um usuário ou grupo, ou automaticamente, usando o roteamento de chumbo.',
'Use Lead Routing'=>'Use Chumbo Routing',
'Enter a commna-separated list of tags to add to the record'=>'Digite uma lista separada por commna de etiquetas para adicionar ao registro',
'Change one or more fields on an existing record.'=>'Mudar um ou mais campos em um registro existente.',
'Delay execution of the remaining steps until the specified time.'=>'Atrasar a execução das etapas restantes até o tempo especificado.',
'hours'=>'horas',
'days'=>'dias',
'months'=>'meses',
'Current Timestamp'=>'Timestamp atual',
'Flow configuration data appears to be corrupt.'=>'Dados de configuração de fluxo parece estar corrompido.',
'You must configure a trigger event.'=>'Você deve configurar um evento de disparo.',
'There must be at least one action in the flow.'=>'Deve haver pelo menos uma ação no fluxo.',
'Duration (s)'=>'Duração (s)',
'Create New Flow'=>'Criar novo fluxo',
'Message'=>'Mensagem',
'For'=>'Para',
'Post Type'=>'Publicar Tipo',
'Create Notification?'=>'Criar Notificação?',
'User Active?'=>'Usuário ativo?',
'Tags (optional)'=>'Tags (opcional)',
'seconds (recommended for formulas only)'=>'segundos (recomendado apenas para fórmulas)',
'All Trigger Logs'=>'Todos Gatilho Logs',
'Trigger: '=>'Trigger:',
'Execute Branch: '=>'Executar Branch:',
'Trigger Log'=>'Gatilho Log',
'Are you sure you want to delete all trigger logs?'=>'Tem certeza de que deseja excluir todos os registros de gatilho?',
'Are you sure you want to permanently delete all trigger logs?'=>'Tem certeza de que deseja excluir permanentemente todos os registros de gatilho?',
'Triggered At'=>'Provocado No',
'Log Output'=>'Saída de Registro',
'View Log Output'=>'Ver Output Log',
'Flow Name'=>'Fluxo Nome',
'Flow Trigger Logs'=>'Fluxo de disparo Logs',
'Cron Action Succeeded'=>'Ação Cron Sucedido',
'Cron Action Failed'=>'Ação Cron Falha',
'Viewing log file {file}'=>'Visualizando arquivo de log {file}',
'Show Trigger Logs'=>'Mostrar Gatilho Logs',
'View Cron Log'=>'Ver Cron Log',
'Test Cron'=>'Teste Cron',
'Toggle Node Labels'=>'Rótulos de nó de alternância',
'Required flow item input missing'=>'Entrada artigo vazão necessária em falta',
'View created record: '=>'Ver criado registro:',
'View created action: '=>'Ver criado ação:',
'Flow item configuration error: No attributes added'=>'Fluxo erro de configuração Item: Sem atributos adicionados',
'View updated record: '=>'Ver registro atualizado:',
'User '=>'Usuário',
'Default Web Content'=>'Conteúdo da Web padrão',
'conditions not passed'=>'condições não passou',
'Flow configuration data appears to be '=>'Fluxo de dados de configuração parece ser',
'There must be at least one action in the '=>'Deve haver pelo menos uma ação no',
'View record: '=>'Visualizar registro:',
'Export Flow'=>'Fluxo de Exportação',
'Please click the button below to begin the export. Do not close this page until the export is finished.'=>'Por favor, clique no botão abaixo para iniciar a exportação. Não feche esta página até que a exportação seja concluída.',
'You are currently exporting '=>'Você está exportando',
'Please click the link below to download the exported flow.'=>'Por favor, clique no link abaixo para baixar o fluxo exportado.',
'Upload a flow that has been exported using the X2Flow export tool.'=>'Carregar um fluxo que foi exportado usando a ferramenta de exportação X2Flow.',
'Processes are not associated with records of this type'=>'Processos não são associados com registros desse tipo',
'{recordName} are not associated with processes'=>'{recordName} não estão associados a processos',
'hour'=>'hora',
'Stage "{stageName}" started for {recordName}'=>'Stage &quot; {stageName} &quot;começou por {recordName}',
'Lead routing rules cannot be used with {type} records'=>'Regras de roteamento de chumbo não podem ser usados ​​com {type} registros',
'Stage "{stageName}" reverted for {recordName}'=>'Stage &quot; {stageName} &quot;revertido para {recordName}',
'Stage Comment'=>'Stage Comentário',
'Stage "{stageName}" completed for {recordName}'=>'Stage &quot; {stageName} &quot;preenchido para {recordName}',
'Associated Record Type'=>'Associado Tipo de registro',
'the following condition did not pass: '=>'a seguinte condição não passou:',
'a required parameter is missing'=>'um parâmetro obrigatório está ausente',
'No tags on the record matched those in the tag trigger criteria.'=>'Nenhuma tag no registro correspondeu aqueles nos critérios de gatilho tag.',
'No tags in the trigger criteria!'=>'Nenhuma tag nos critérios de gatilho!',
'Tags parameter missing!'=>'Marcações parâmetro ausente!',
'Match Probability'=>'Probabilidade Jogo',
'Invalid file type'=>'Tipo de arquivo inválido',
'Invalid file contents'=>'Conteúdo do arquivo inválido',
);