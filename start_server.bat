@echo off
title Servidor Local - Dra. Laura Ferreira Advocacia
echo ==============================================================================
echo  INICIANDO SERVIDOR LOCAL - DRA. LAURA FERREIRA (DIREITO DA SAUDE)
echo ==============================================================================
echo.
echo Acesse no navegador: http://localhost:8088
echo Para encerrar o servidor, pressione CTRL+C nesta janela.
echo.

php -S 127.0.0.1:8088 router.php
pause
