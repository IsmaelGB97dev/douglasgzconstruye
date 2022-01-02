
$(document).ready(function(){
    
    let fecha = new Date(),
        mesActual = fecha.getMonth()+1,
        yearActual = fecha.getFullYear(),
        indicadorMes = $('.calendar-month'),
        indicadorYear = $('.calendar-year'),
        btnNavDown = $('#calendar-down'),
        btnNavUp = $('#calendar-up'),
        idioma = 'en',
        tableDias = $('#calendar-days');

    indicadorMes.text(nombreMeses(mesActual));
    indicadorYear.text(yearActual);

    DibujarDias();
    function DibujarDias() {
        if(idioma == 'es') {
            dias = `<th>Lunes</th>
            <th>Martes</th>
            <th>Miercoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
            <th>Sabado</th>
            <th>Domingo</th>`;
        } else {
            dias = `<th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thruesday</th>
            <th>Friday</th>
            <th>Saturday</th>
            <th>Sunday</th>`;
        }
        tableDias.find('thead').html(dias);

        let todoDias = new Date(yearActual, mesActual, 0).getDate();
        let html = '<tr>';

        for(let i=1; i<= todoDias; i++) {
            
            html += `<td>${i}</td>`;
            if(i % 7 == 0) {
                html += '</tr><tr>';
            } 
            // }
        }
        tableDias.find('tbody').html(html);
    }

    btnNavDown.on('click', () => {
        mesActual--;
        indicadorMes.text(nombreMeses(mesActual));
        mesActual = (mesActual == 1) ? 13 : mesActual;
        yearActual = (mesActual == 12) ? yearActual-1 : yearActual;
        indicadorYear.text(yearActual);
        DibujarDias();
    });

    btnNavUp.on('click', () => {
        mesActual++;
        indicadorMes.text(nombreMeses(mesActual));
        mesActual = (mesActual == 12) ? 0 : mesActual;
        yearActual = (mesActual == 1) ? yearActual+1 : yearActual;
        indicadorYear.text(yearActual);
    });




    
    function nombreMeses(NMes) {
        let result = '';
        if(idioma == 'es') {
            switch(NMes) {
                case 1: result = 'Enero'; break;
                case 2: result = 'Febrero'; break;
                case 3: result = 'Marzo'; break;
                case 4: result = 'Abril'; break;
                case 5: result = 'Mayo'; break;
                case 6: result = 'Junio'; break;
                case 7: result = 'Julio'; break;
                case 8: result = 'Agosto'; break;
                case 9: result = 'Septiembre'; break;
                case 10: result = 'Octubre'; break;
                case 11: result = 'Noviembre'; break;
                case 12: result = 'Diciembre'; break;
            }
        } else {
            switch(NMes) {
                case 1: result = 'January'; break;
                case 2: result = 'February'; break;
                case 3: result = 'March'; break;
                case 4: result = 'April'; break;
                case 5: result = 'May'; break;
                case 6: result = 'Juny'; break;
                case 7: result = 'July'; break;
                case 8: result = 'August'; break;
                case 9: result = 'September'; break;
                case 10: result = 'October'; break;
                case 11: result = 'November'; break;
                case 12: result = 'December'; break;
            }
        }
        return result;
    }


});