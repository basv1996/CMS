<style>
    td {
    border: 1px solid black;}
</style>
<table>
 {foreach from=$result item=oneItem}
 <tr>
     <td>{$oneItem.schoolname}</td>    
     <td>{$oneItem.adress}</td>
     <td>{$oneItem.zipcode}</td>
     <td>{$oneItem.district}</td>
     <td>{$oneItem.telnr}</td>
     <td>{$oneItem.email}</td>
     <td>{$oneItem.website}</td>
     <td>{$oneItem.openday}</td>
     <td>{$oneItem.infonight}</td>
     <td>{$oneItem.private}</td>
     <td>{$oneItem.level}</td>
     <td>{$oneItem.concept}</td>
     <td>{$oneItem.specials}</td>
     <td>{$oneItem.tto}</td>
     <td>{$oneItem.sports}</td>
     <td>{$oneItem.tech}</td>
     <td>{$oneItem.spanish}</td>
     <td>{$oneItem.vso}</td>
     <td>{$oneItem.vmboB}</td>
     <td>{$oneItem.vmboK}</td>
     <td>{$oneItem.vmboT}</td>
     <td>{$oneItem.havo}</td>
     <td>{$oneItem.vwo}</td>
     <td>{$oneItem.gymnasium}</td>
     <td>{$oneItem.basis}</td>
     <td>{$oneItem.art}</td>
    </tr>
    <th><a href="?action=admin&cms_action=edit&id={$oneItem.ID}">edit</a></th>
    <th><a href="?action=admin&cms_action=delete&id={$oneItem.ID}">delete</a></th>
   {/foreach}
</table>
<a href="?action=admin&cms_action=insert">add new</a>
