// this ai program to find out if raju is mighty or not 
function mightgyRaju(...args) {
    console.log(args
        )
    const rajus = args[0]
        rajus.map(raju => {
            if (raju.power > 100 ) {
                console.log(raju.name, " raju is mighty")
            } else {
                console.log(raju.name, " is not that mighty")
            }
        })
}
const rajuProfiles = [
    {
        name: "Raju Mahajan",
        power: 65
    },
    {
        name: "Raju Sameer",
        power: 99
    },
    {
        name: "Raju Faizan",
        power: 101
    },
    {


        name: "Raju Surya",
        power: 69420
    }
]
mightgyRaju(rajuProfiles, "my name", 69)

function accelerationOfVehicle(...vehicleDetails) {
    console.log(vehicleDetails)
    let sortedVehicles = vehicleDetails.sort(function(a, b){return a-b})
    const lastElement = sortedVehicles[sortedVehicles.length - 1]
    const LE = sortedVehicles[-1]
    console.log(lastElement, LE)
}
accelerationOfVehicle(56, 322, 15, 5)