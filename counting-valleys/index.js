function countingValleys(n, s) {
	let currentAltitude = 0;
	let vallies = 0;
	let isStillInVally = false;
	for (let i = 0; i < n; i++) {
		if (s[i] == "U") {
			currentAltitude++;
		} else {
			currentAltitude--;
		}
		if (currentAltitude < 0 && !isStillInVally) {
			vallies++;
			isStillInVally = true;
		} else if (currentAltitude >= 0) {
			isStillInVally = false;
		}
	}
	return vallies;
}
