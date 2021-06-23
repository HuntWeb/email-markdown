{{-- <table class="action" align="center" width="100%" cellpadding="0" cellspacing="0" role="presentation">
   <tr>
      <td align="center">
         <table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation">
            <tr>
               <td align="center">
                  <table border="0" cellpadding="0" cellspacing="0" role="presentation">
                     <tr>
                        <td>
                           <a href="{{ $url }}" class="button button-{{ $color ?? 'primary' }}" target="_blank" rel="noopener">{{ $slot }}</a>
                        </td>
                     </tr>
                  </table>
               </td>
            </tr>
         </table>
      </td>
   </tr>
</table> --}}


<a href="{{ $url }}" target="_blank" class="button button-new">{{ $slot }}</a>
<a href="{{ $url }}" target="_blank" class="button button-blue">{{ $slot }}</a>