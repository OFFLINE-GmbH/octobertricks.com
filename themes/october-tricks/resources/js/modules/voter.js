$(function () {
    $('.voter__arrow').on('click', function () {
        const isUp = this.classList.contains('voter__arrow--up')
        const isDown = ! isUp
        const parent = this.parentNode
        const wasUp = parent.classList.contains('voter--voted-up')
        const wasDown = parent.classList.contains('voter--voted-down')
        const {topic, id} = parent.dataset
        const votes = parent.querySelector('.voter__votes')
        const base = parseInt(votes.innerText)
        const method = topic === 'trick' ? 'onVoteTrick' : 'onVoteComment'

        // Reset active voted styles
        parent.classList.remove('voter--voted-up', 'voter--voted-down')

        // A vote was active and has been clicked again, revert the vote
        if (isUp && wasUp) {
            votes.innerText = base - 1
        } else if (isDown && wasDown) {
            votes.innerText = base + 1
        } else {
            // If a vote was active two points have to be added/removed
            let value = wasDown || wasUp ? 2 : 1

            this.classList.add('voter__arrow--active')
            parent.classList.add(`voter--voted-` + (isUp ? 'up' : 'down'))
            votes.innerText = isUp ? base + value : base - value
        }

        $.request(method, {
            data: {
                id: id,
                up: isUp ? 1 : 0
            }
        })
    })
})