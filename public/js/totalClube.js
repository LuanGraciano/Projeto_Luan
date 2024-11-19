const totalClubeElment = document.querySelector('.total-clube')
async function totalClube() {
    let total = await fetch('/api/clubes')
    total = await total.json()
    totalClubeElment.innerHTML = total.total_clubes
}
totalClube()