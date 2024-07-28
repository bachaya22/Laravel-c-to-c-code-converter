document.getElementById('convertForm').addEventListener('submit', async function (e) {
    e.preventDefault();

    const cCode = document.getElementById('cCode').value;
    const cppCode = document.getElementById('cppCode');

    const response = await fetch('/convert', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({ code: cCode })
    });

    const result = await response.json();
    cppCode.value = result.convertedCode;
});
