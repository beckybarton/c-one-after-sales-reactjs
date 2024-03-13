import React from 'react';
function TestVariableComponent(){
    const testvariable = document.getElementById('testvariable').getAttribute('data-testvariable');
    // const testvariable = "document.getElementById('testvariable').getAttribute('data-testvariable')";

   return (
      <div>
         <p>{testvariable}</p>
         {/* Your other React component code */}
      </div>
   );
}
export default TestVariableComponent;
