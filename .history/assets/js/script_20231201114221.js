// Erreur dans content-script.js

// Code en question :
forLabel(chrome-extension://cpaibbcbodhimfnjnakiidgbpiehfgci/scripts/content-script.js:4:19498)
findLabelForInput(chrome-extension://cpaibbcbodhimfnjnakiidgbpiehfgci/scripts/content-script.js:4:19331)
value(chrome-extension://cpaibbcbodhimfnjnakiidgbpiehfgci/scripts/content-script.js:3:11518)
chrome-extension://cpaibbcbodhimfnjnakiidgbpiehfgci/scripts/content-script.js:3:15971
// ... (d'autres lignes)

// Commentaires :
// Une exception DOM non capturée s'est produite dans le fichier content-script.js.
// La fonction 'querySelector' sur le document a échoué avec le sélecteur 'label[for='Nom de l'entreprise']'.
// Le sélecteur contient une apostrophe, et cela peut causer une erreur s'il n'est pas correctement échappé.

// Suggestions :
// 1. Assurez-vous que le sélecteur est correctement échappé. Utilisez des guillemets simples à l'intérieur de guillemets doubles ou vice versa.
// 2. Si le problème persiste, vérifiez si l'apostrophe dans le sélecteur est nécessaire, sinon, envisagez de le supprimer.

// Remarque : Les erreurs non capturées peuvent entraîner un comportement indésirable de l'extension Chrome.
