<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Perfil
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */

    public function handle(Request $request, Closure $next)
    {
        // $ambiente = 'prod';
        $ambiente = 'local';

        if ($ambiente == 'local') {
            $perfil = 0;
        } else {
            // $perfil = $this->perfil = auth()->user()->perfil;
            $perfil = 0;

        }

        $route = $request->route()->getName();

        if ($perfil == 1) {
            if (

                //$route == 'Tipo' ||
                $route == 'quotes' ||
                $route == 'psc' ||
                $route == 'partNumbers.list' ||
                $route == 'bus' ||
                $route == 'expenses.list' ||
                $route == 'expenses.create' ||
                $route == 'expenses.edit' ||
                $route == 'expenses.update' ||
                $route == 'expenses.partnumber' ||
                $route == 'expenses.regional' ||
                $route == 'dashboard' ||
                $route == 'editpsc' ||
                $route == 'psc.store' ||
                $route == 'psc.destroy' ||
                $route == 'psc.edit' ||
                $route == 'psc.editstatus' ||
                $route == 'partNumbers.historic' ||
                $route == 'partNumbers.historic.edit' ||
                $route == 'ajaxQuoteInfo' ||
                $route == 'BUs.edit'

            ) {
                return $next($request);
            } else {
                abort(403, 'Acesso não autorizado');
            }
        } else if ($perfil == 2) {

            if (
                $route == 'dashboard' ||
                $route == '/' ||
                //Quote
                $route == 'quotes' ||
                $route == 'newquote' ||
                $route == 'editquote' ||
                $route == 'updatequote' ||
                $route == 'addquote' ||
                $route == 'quote.partNumber' ||
                $route == 'editquotestatus' ||
                $route == 'quotes.historic' ||
                $route == 'quotes.historic.edit' ||
                //Group
                $route == 'group.list' ||
                $route == 'groups.store' ||
                $route == 'groups.update' ||
                $route == 'groups.edit' ||
                $route == 'getfabricante' ||
                //Bus
                $route == 'BUs' ||
                $route == 'BUs.store' ||
                $route == 'BUs.edit' ||
                $route == 'BUs.update' ||
                //Familia
                $route == 'Familia' ||
                $route == 'Familia.list' ||
                $route == 'familia.edit' ||
                $route == 'Familia.update' ||
                //Fabricante
                $route == 'Fabricante' ||
                $route == 'fabricante.edit' ||
                $route == 'Fabricante.list' ||
                $route == 'fabricante.update' ||
                $route == 'gettipofabricante' ||
                //PartnerNumber
                $route == 'partNumbers.list' ||
                $route == 'partNumbers.form' ||
                $route == 'partNumbers.create' ||
                $route == 'partNumbers.edit' ||
                $route == 'partNumbers.updatePN' ||
                $route == 'partNumbers.update' ||
                $route == 'partNumbers.listinquote' ||
                $route == 'partNumbers.category' ||
                $route == 'partNumbers.seachpartnumber' ||
                $route == 'partNumber.searchCategory' ||
                $route == 'partNumbers.deleteCategory' ||
                $route == 'partNumbers.downloadFile' ||
                $route == 'partNumbers.historic' ||
                $route == 'partNumbers.historic.edit' ||
                $route == 'ajaxQuoteInfo' ||

                //Tipo
                //$route == 'Tipo' ||

                //PSC
                $route == 'psc' ||
                $route == 'newpsc' ||
                $route == 'editpsc' ||
                $route == 'psc.store' ||
                $route == 'psc.destroy' ||
                $route == 'psc.edit' ||
                $route == 'psc.editstatus'

            ) {
                return $next($request);
            } else {
                abort(403, 'Acesso não autorizado');
            }
        } else if ($perfil == 3) {
            if (
                $route == 'dashboard' ||
                $route == '/' ||
                //Bus
                $route == 'BUs' ||
                $route == 'BUs.edit' ||
                //Tipo
                //$route == 'Tipo' ||

                //PSC
                $route == 'psc' ||
                $route == 'newpsc' ||
                $route == 'editpsc' ||
                $route == 'psc.store' ||
                $route == 'psc.edit' ||
                $route == 'psc.destroy' ||
                $route == 'psc.editstatus' ||
                //partNumbers
                $route == 'partNumbers.historic' ||
                $route == 'partNumbers.historic.edit' ||
                $route == 'ajaxQuoteInfo' ||
                //Quote
                $route == 'quotes' ||
                $route == 'newquote' ||
                $route == 'editquote' ||
                $route == 'updatequote' ||
                $route == 'addquote' ||
                $route == 'quote.partNumber' ||
                $route == 'editquotestatus' ||
                $route == 'quotes.historic' ||
                $route == 'quotes.historic.edit'

            ) {
                return $next($request);
            } else {
                abort(403, 'Acesso não autorizado');
            }
        } else if ($perfil == 4) {
            if (
                $route == 'dashboard' ||
                $route == '/' ||
                //Quote
                $route == 'quotes' ||
                $route == 'newquote' ||
                $route == 'editquote' ||
                $route == 'updatequote' ||
                $route == 'addquote' ||
                $route == 'quote.partNumber' ||
                $route == 'editquotestatus' ||
                $route == 'quotes.historic' ||
                $route == 'quotes.historic.edit' ||
                //Group
                $route == 'group.list' ||
                $route == 'groups.store' ||
                $route == 'groups.update' ||
                $route == 'groups.edit' ||
                $route == 'getfabricante' ||
                //Bus
                $route == 'BUs' ||
                $route == 'BUs.store' ||
                $route == 'BUs.edit' ||
                $route == 'BUs.update' ||
                //Familia
                $route == 'Familia' ||
                $route == 'Familia.list' ||
                $route == 'familia.edit' ||
                $route == 'Familia.update' ||
                //Fabricante
                $route == 'Fabricante' ||
                $route == 'fabricante.edit' ||
                $route == 'Fabricante.list' ||
                $route == 'fabricante.update' ||
                $route == 'gettipofabricante' ||
                //Tipo PartNumber
                $route == 'PartnumberType.list' ||
                $route == 'PartnumberType.store' ||
                //PartnerNumber
                $route == 'partNumbers.list' ||
                $route == 'partNumbers.form' ||
                $route == 'partNumbers.create' ||
                $route == 'partNumbers.edit' ||
                $route == 'partNumbers.updatePN' ||
                $route == 'partNumbers.update' ||
                $route == 'partNumbers.listinquote' ||
                $route == 'partNumbers.category' ||
                $route == 'partNumbers.seachpartnumber' ||
                $route == 'partNumber.searchCategory' ||
                $route == 'partNumbers.deleteCategory' ||
                $route == 'partNumbers.downloadFile' ||
                $route == 'partNumbers.historic' ||
                $route == 'partNumbers.historic.edit' ||
                $route == 'ajaxQuoteInfo' ||

                //Tipo
                //$route == 'Tipo' ||

                //PSC
                $route == 'psc' ||
                $route == 'newpsc' ||
                $route == 'editpsc' ||
                $route == 'psc.store' ||
                $route == 'psc.destroy' ||
                $route == 'psc.edit' ||
                $route == 'psc.editstatus'

            ) {
                return $next($request);
            } else {
                abort(403, 'Acesso não autorizado');
            }
        } else if ($perfil == 5) {
            if (
                $route == 'dashboard' ||
                $route == '/' ||
                $route == 'order'

            ) {
                return $next($request);
            } else {
                abort(403, 'Acesso não autorizado');
            }
        } else if ($perfil == 0) {
            if (
                $route == 'dashboard' ||
                $route == '/' ||
                $route == 'order' ||
                $route == 'orderquoteview' ||
                //Quote
                $route == 'quotes' ||
                $route == 'newquote' ||
                $route == 'editquote' ||
                $route == 'updatequote' ||
                $route == 'addquote' ||
                $route == 'quote.partNumber' ||
                $route == 'editquotestatus' ||
                $route == 'statusorder' ||
                $route == 'getexpensesquote' ||
                $route == 'quotes.historic' ||
                $route == 'quotes.historic.edit' ||
                //Group
                $route == 'group.list' ||
                $route == 'groups.store' ||
                $route == 'groups.update' ||
                $route == 'groups.edit' ||
                $route == 'getfabricante' ||
                //Bus
                $route == 'BUs' ||
                $route == 'BUs.store' ||
                $route == 'BUs.edit' ||
                $route == 'BUs.update' ||
                //Familia
                $route == 'Familia' ||
                $route == 'Familia.list' ||
                $route == 'familia.edit' ||
                $route == 'Familia.update' ||
                //Fabricante
                $route == 'Fabricante' ||
                $route == 'fabricante.edit' ||
                $route == 'Fabricante.list' ||
                $route == 'fabricante.update' ||
                $route == 'gettipofabricante' ||
                //PartnerNumber
                $route == 'partNumbers.list' ||
                $route == 'partNumbers.form' ||
                $route == 'partNumbers.create' ||
                $route == 'partNumbers.edit' ||
                $route == 'partNumbers.updatePN' ||
                $route == 'partNumbers.update' ||
                $route == 'partNumbers.listinquote' ||
                $route == 'partNumbers.category' ||
                $route == 'partNumbers.seachpartnumber' ||
                $route == 'partNumber.searchCategory' ||
                $route == 'partNumbers.deleteCategory' ||
                $route == 'partNumbers.downloadFile' ||
                $route == 'partNumber.category' ||
                $route == 'partNumbers.historic' ||
                $route == 'partNumbers.historic.edit' ||
                $route == 'ajaxQuoteInfo' ||

                //Tipo
                //$route == 'Tipo' ||
                $route == 'PartnumberType.list' ||
                $route == 'PartnumberType.store' ||
                $route == 'PartnumberType.update' ||
                $route == 'PartnumberType.edit' ||

                //PSC
                $route == 'psc' ||
                $route == 'newpsc' ||
                $route == 'editpsc' ||
                $route == 'psc.store' ||
                $route == 'psc.destroy' ||
                $route == 'psc.edit' ||
                $route == 'psc.editstatus' ||
                $route == 'psc.cotacao' ||
                $route == 'psc.visualizarpsc' ||
                $route == 'psc.finalizado' ||
                $route == 'psc.pendente' ||
                //Expenses
                $route == 'expenses.list' ||
                $route == 'expenses.create' ||
                $route == 'expenses.edit' ||
                $route == 'expenses.update' ||
                $route == 'expenses.listExpensesInQuote' ||
                $route == 'expenses.partnumber' ||
                $route == 'expenses.regional'
            ) {
                return $next($request);
            } else {
                abort(403, 'Acesso não autorizado');
            }
        } else {
            abort(403, 'Acesso não autorizado');
        }
    }
}