<?php

      $menu_gestor = ['Dashboard', 'Clientes', 'Vendas', 'Contas', 'Configurações', 'Perfil'];
      $menu_atendente = ['Dashboard', 'Clientes', 'Vendas', 'Perfil'];

      $itens_de_menu = rand() % 2 == 0 ? $menu_gestor : $menu_atendente;


      $breadcrumb_title = 'Relatório Mensal';
      $breadcrumb_path = ['Home', 'Vendas', 'Relatório', 'Mensal'];
?>